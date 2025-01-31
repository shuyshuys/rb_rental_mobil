<?php

namespace App\Filament\Resources;

use NumberFormatter;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Builder;
use Spatie\SimpleExcel\SimpleExcelWriter;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TransactionResource\Pages;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use App\Filament\Resources\TransactionResource\RelationManagers;
use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use AlperenErsoy\FilamentExport\Actions\FilamentExportHeaderAction;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $label = 'Pemesanan Rental';

    protected static ?string $navigationLabel = 'Pemesanan Rental';

    protected static ?string $pluralLabel = 'Pemesanan Rental';

    protected static ?string $navigationGroup = 'Transaksi';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make([])
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->options([
                                'pending' => 'Pending',
                                'processing' => 'Processing',
                                'rented' => 'Rented',
                                'returned' => 'Returned',
                            ])
                            ->default(fn() => auth()->user()->role_id === 3 ? 'pending' : null)
                            ->disabled(fn() => auth()->user()->role_id === 3)
                            ->required(),
                        Forms\Components\Select::make('customer_id')
                            ->label('Data Peminjam')
                            ->relationship('customer', 'name', function ($query) {
                                return $query->where('user_id', auth()->id());
                            })
                            ->searchable()
                            ->preload()
                            ->required(),
                        Forms\Components\Select::make('car_id')
                            ->relationship('car', 'name', function ($query) {
                                return $query->where('status', '!=', 0);
                            })
                            ->searchable()
                            ->preload()
                            ->required()
                            ->default(Request::query('car_id')),
                        Forms\Components\DateTimePicker::make('rent_date'),
                        Forms\Components\DateTimePicker::make('back_date'),
                        Forms\Components\DateTimePicker::make('return_date')
                            ->visible(fn() => auth()->user()->role_id !== 3),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('invoice_no'),
                Tables\Columns\SelectColumn::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'processing' => 'Processing',
                        'rented' => 'Rented',
                        'returned' => 'Returned',
                    ])
                    ->inline()
                    ->sortable()
                    ->searchable()
                    ->disabled(fn($record) => auth()->user()->role_id === 3),
                Tables\Columns\TextColumn::make('customer.name'),
                Tables\Columns\TextColumn::make('car_details')
                    ->label('Car Details')
                    ->formatStateUsing(function ($record) {
                        return $record->car->manufacture->name . ' ' . $record->car->name . ' ' . $record->car->year;
                    }),
                Tables\Columns\TextColumn::make('rent_date')
                    ->date(),
                Tables\Columns\TextColumn::make('back_date')
                    ->date(),
                Tables\Columns\TextColumn::make('return_date')
                    ->date(),
                Tables\Columns\TextColumn::make('price')
                    ->toggleable(fn() => auth()->user()->role_id !== 3)
                    ->formatStateUsing(function ($state) {
                        $formatter = new NumberFormatter('id_ID', NumberFormatter::CURRENCY);
                        $formatter->setAttribute(NumberFormatter::FRACTION_DIGITS, 0);
                        return $formatter->formatCurrency($state, 'IDR');
                    }),
                Tables\Columns\TextColumn::make('amount')
                    ->toggleable(fn() => auth()->user()->role_id !== 3)
                    ->formatStateUsing(function ($state) {
                        $formatter = new NumberFormatter('id_ID', NumberFormatter::CURRENCY);
                        $formatter->setAttribute(NumberFormatter::FRACTION_DIGITS, 0);
                        return $formatter->formatCurrency($state, 'IDR');
                    }),
                Tables\Columns\TextColumn::make('penalty')
                    ->toggleable(fn() => auth()->user()->role_id !== 3)
                    ->formatStateUsing(function ($state) {
                        $formatter = new NumberFormatter('id_ID', NumberFormatter::CURRENCY);
                        $formatter->setAttribute(NumberFormatter::FRACTION_DIGITS, 0);
                        return $formatter->formatCurrency($state, 'IDR');
                    }),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('confirmReturn')
                    ->label('Confirm Return')
                    ->action(function (Transaction $record) {
                        $today = now();
                        $rentDate = $record->rent_date;
                        $backDate = $record->back_date;
                        $car = $record->car;

                        // Calculate the number of days the car was rented
                        $daysRented = $rentDate->diffInDays($today);

                        // Calculate the total price
                        $price = $car->price * $daysRented;

                        // Calculate the penalty if the return_date exceeds the back_date
                        $penalty = 0;
                        if ($today->greaterThan($backDate)) {
                            $daysLate = $backDate->diffInDays($today);
                            $penalty = $car->penalty * $daysLate;
                        }

                        // Calculate the total amount
                        $amount = $price + $penalty;

                        // Update the record
                        $record->update([
                            'return_date' => $today,
                            'price' => $price,
                            'penalty' => $penalty,
                            'amount' => $amount,
                            'status' => 'returned',
                        ]);
                    })
                    ->requiresConfirmation()
                    ->visible(fn($record) => auth()->user()->role_id !== 3),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                FilamentExportBulkAction::make('export')
                    ->directDownload()
                    ->disableAdditionalColumns()
                    ->withHiddenColumns()
                    ->defaultPageOrientation('landscape')
                    ->defaultFormat('pdf')
                    ->disableXlsx()
                    ->disableCsv(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTransactions::route('/'),
            'create' => Pages\CreateTransaction::route('/create'),
            'edit' => Pages\EditTransaction::route('/{record}/edit'),
        ];
    }

    protected function getTableHeaderActions(): array
    {
        return [
            FilamentExportHeaderAction::make('Export'),
        ];
    }
}
