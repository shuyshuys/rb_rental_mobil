<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TransactionResource\Pages;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use App\Filament\Resources\TransactionResource\RelationManagers;

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
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('customer.name'),
                Tables\Columns\TextColumn::make('car_details')
                    ->label('Car Details')
                    ->formatStateUsing(function ($record) {
                        return $record->car->manufacture->name . ' ' . $record->car->name . ' ' . $record->car->year;
                    }),
                Tables\Columns\TextColumn::make('rent_date')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('back_date')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('return_date')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('price')->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('amount')->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('penalty')->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                ExportBulkAction::make()
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
}
