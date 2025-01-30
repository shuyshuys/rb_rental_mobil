<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarImageResource\Pages;
use App\Filament\Resources\CarImageResource\RelationManagers;
use App\Models\CarImage;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarImageResource extends Resource
{
    protected static ?string $model = CarImage::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $label = 'Galeri';

    protected static ?string $navigationLabel = 'Galeri';

    protected static ?string $pluralLabel = 'Galeri';

    protected static ?string $navigationGroup = 'Data Kendaraan';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('car_id')
                    ->relationship('car', 'name')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('car_details')
                    ->label('Car Details')
                    ->formatStateUsing(function ($record) {
                        return $record->car->manufacture->name . ' ' . $record->car->name . ' ' . $record->car->year;
                    }),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCarImages::route('/'),
            'create' => Pages\CreateCarImage::route('/create'),
            'edit' => Pages\EditCarImage::route('/{record}/edit'),
        ];
    }
}
