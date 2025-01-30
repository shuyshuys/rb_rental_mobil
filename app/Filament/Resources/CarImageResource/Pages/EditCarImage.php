<?php

namespace App\Filament\Resources\CarImageResource\Pages;

use App\Filament\Resources\CarImageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCarImage extends EditRecord
{
    protected static string $resource = CarImageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
