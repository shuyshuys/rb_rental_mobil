<?php

namespace App\Filament\Resources;

use App\Models\Car;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CarResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CarResource\RelationManagers;
use App\Filament\Resources\CarResource\RelationManagers\CarimageRelationManager;
use Filament\Resources\RelationManagers\RelationManager;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $label = 'Mobil';

    protected static ?string $navigationLabel = 'Mobil';

    protected static ?string $pluralLabel = 'Mobil';

    protected static ?string $navigationGroup = 'Data Kendaraan';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Toggle::make('status')
                    ->label('Status')
                    ->inline(false)
                    ->onColor('success')
                    ->offColor('danger')
                    ->onIcon('heroicon-s-check')
                    ->offIcon('heroicon-s-x')
                    ->dehydrateStateUsing(fn($state) => $state ? 1 : 0)
                    ->mutateDehydratedStateUsing(fn($state) => $state === 1)
                    ->afterStateHydrated(function ($component, $state) {
                        $component->state($state === 1);
                    }),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('color')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('license_number')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('year')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price'),
                Forms\Components\TextInput::make('penalty'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('manufacture.name')
                    ->label('Manufacture'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('carimages_count')->counts('carimages')->label('Images'),
                Tables\Columns\TextColumn::make('license_number'),
                Tables\Columns\TextColumn::make('color'),
                Tables\Columns\TextColumn::make('year'),
                Tables\Columns\BadgeColumn::make('status')
                    ->formatStateUsing(function ($state) {
                        return $state === '1' ? 'available' : 'unavailable';
                    })
                    ->color(static function ($state): string {
                        if ($state === '0') {
                            return 'danger';
                        }
                        return 'success';
                    }),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('penalty'),
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
            RelationManagers\CarimageRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
            'custom' => Pages\CustomCarPage::route('/custom'),
        ];
    }
}
