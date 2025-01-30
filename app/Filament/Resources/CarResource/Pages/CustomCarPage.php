<?php

namespace App\Filament\Resources\CarResource\Pages;

use Filament\Resources\Pages\Page;
use App\Models\Car;
use App\Filament\Resources\CarResource;

class CustomCarPage extends Page
{
    protected static string $resource = CarResource::class;

    protected static string $view = 'filament.resources.car-resource.pages.custom-car-page';

    public $cars;

    public function mount()
    {
        $this->cars = Car::all();
    }
}