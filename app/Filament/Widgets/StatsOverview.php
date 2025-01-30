<?php

namespace App\Filament\Widgets;

use App\Models\Car;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        // Calculate the current and previous values for customers
        $currentMonthCustomers = User::where('role_id', 3)
            ->whereYear('created_at', now()->year)
            ->whereMonth('created_at', now()->month)
            ->count();

        $previousMonth = now()->subMonth();
        $previousMonthCustomers = User::where('role_id', 3)
            ->whereYear('created_at', $previousMonth->year)
            ->whereMonth('created_at', $previousMonth->month)
            ->count();

        // Calculate the percentage change for customers
        $percentageChange = $previousMonthCustomers > 0 ? (($currentMonthCustomers - $previousMonthCustomers) / $previousMonthCustomers) * 100 : 0;
        $description = abs($percentageChange) . '% ' . ($percentageChange >= 0 ? 'increase' : 'decrease');
        $descriptionIcon = $percentageChange >= 0 ? 'heroicon-s-trending-up' : 'heroicon-s-trending-down';
        $color = $percentageChange >= 0 ? 'success' : 'danger';

        // Calculate the total and available cars
        $totalCars = Car::count();
        $availableCars = Car::where('status', 1)->count();
        $carDescription = "$availableCars/$totalCars available";

        return [
            Card::make('Cars Available', $carDescription)
                ->color('primary'),

            Card::make('Total Customers', User::where('role_id', 3)->count())
                ->description($description)
                ->descriptionIcon($descriptionIcon)
                ->color($color),
        ];
    }
}
