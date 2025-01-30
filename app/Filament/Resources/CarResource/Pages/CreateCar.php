<?php

namespace App\Filament\Resources\CarResource\Pages;

use Filament\Pages\Actions;
use Filament\Forms\Components\Toggle;
use App\Filament\Resources\CarResource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\MarkdownEditor;

class CreateCar extends CreateRecord
{
    use CreateRecord\Concerns\HasWizard;

    protected static string $resource = CarResource::class;

    protected function getSteps(): array
    {
        return [
            Step::make('Data')
                ->description('Detail kendaraan')
                ->schema([
                    // TextInput::make('name')
                    //     ->required()
                    //     ->reactive()
                    //     ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state))),
                    // TextInput::make('slug')
                    //     ->disabled()
                    //     ->required()
                    //     ->unique(Category::class, 'slug', fn($record) => $record),
                    Select::make('manufacture_id')
                        ->relationship('manufacture', 'name')
                        ->required(),
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('color')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('license_number')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('year')
                        ->required()
                        ->maxLength(255),
                ]),
            Step::make('Price')
                ->description('Harga dan Pinalti Keterlambatan')
                ->schema([
                    TextInput::make('price'),
                    TextInput::make('penalty'),
                ]),
            Step::make('Status')
                ->description('Apakah kendaraan beroperasi')
                ->schema([
                    Toggle::make('status')
                        ->label('Kendaraan Aktif')
                        ->inline(false)
                        ->onColor('success')
                        ->offColor('danger')
                        ->onIcon('heroicon-s-check')
                        ->offIcon('heroicon-s-x')
                        ->dehydrateStateUsing(fn($state) => $state ? 'online' : 'offline')
                        ->mutateDehydratedStateUsing(fn($state) => $state === 'online')
                        ->afterStateHydrated(function ($component, $state) {
                            $component->state($state === 'online');
                        }),
                ]),
        ];
    }
}