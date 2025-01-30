<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ManufactureResource\Pages;
use App\Filament\Resources\ManufactureResource\RelationManagers;
use App\Models\Manufacture;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ManufactureResource extends Resource
{
    protected static ?string $model = Manufacture::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $label = 'Manufaktur';

    protected static ?string $navigationLabel = 'Manufaktur';

    protected static ?string $pluralLabel = 'Manufaktur';

    protected static ?string $navigationGroup = 'Data Kendaraan';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
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
            'index' => Pages\ListManufactures::route('/'),
            'create' => Pages\CreateManufacture::route('/create'),
            'edit' => Pages\EditManufacture::route('/{record}/edit'),
        ];
    }
}
