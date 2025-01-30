<?php

namespace App\Filament\Resources\ManufactureResource\Pages;

use App\Filament\Resources\ManufactureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListManufactures extends ListRecords
{
    protected static string $resource = ManufactureResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
