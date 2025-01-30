<?php

namespace App\Filament\Resources\CarResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarimageRelationManager extends RelationManager
{
    protected static string $relationship = 'carimages';

    protected static ?string $recordTitleAttribute = 'car';

    protected static ?string $label = 'Galeri';

    protected static ?string $navigationLabel = 'Galeri';

    protected static ?string $pluralLabel = 'Galeri';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\Select::make('car_id')
                //     ->relationship('car', 'name')
                //     ->required(),
                Forms\Components\FileUpload::make('image')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['car_id'] = $this->ownerRecord->id;

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['car_id'] = $this->ownerRecord->id;

        return $data;
    }
}