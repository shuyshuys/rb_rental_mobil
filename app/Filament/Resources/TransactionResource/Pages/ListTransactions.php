<?php

namespace App\Filament\Resources\TransactionResource\Pages;

use Carbon\Carbon;
use Filament\Pages\Actions;
use Illuminate\Support\Str;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use App\Filament\Resources\TransactionResource;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;

class ListTransactions extends ListRecords
{
    protected static string $resource = TransactionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->mutateFormDataUsing(function (array $data): array {
                    $date = Carbon::now()->format('Ymd');
                    $data['invoice_no'] = 'INV-' . $date . '-' . strtoupper(Str::random(5));

                    return $data;
                }),
        ];
    }

    protected function getTableQuery(): Builder
    {
        $query = parent::getTableQuery();

        if (auth()->user()->role_id == 3) {
            return $query->whereHas('customer', function ($query) {
                $query->where('user_id', auth()->user()->id);
            });
        }

        return $query;
    }
}
