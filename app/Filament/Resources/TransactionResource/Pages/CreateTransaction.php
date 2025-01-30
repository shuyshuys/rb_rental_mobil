<?php

namespace App\Filament\Resources\TransactionResource\Pages;

use Carbon\Carbon;
use Filament\Pages\Actions;
use Illuminate\Support\Str;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\TransactionResource;

class CreateTransaction extends CreateRecord
{
    protected static string $resource = TransactionResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $date = Carbon::now()->format('Ymd');
        $data['invoice_no'] = 'INV-' . $date . '-' . strtoupper(Str::random(5));
        // $data['invoice_no'] = 'INV-' . strtoupper(Str::random(8));

        return $data;
    }
}