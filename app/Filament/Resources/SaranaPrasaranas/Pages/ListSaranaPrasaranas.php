<?php

namespace App\Filament\Resources\SaranaPrasaranas\Pages;

use App\Filament\Resources\SaranaPrasaranas\SaranaPrasaranaResource;
use Filament\Actions\CreateAction;
use App\Models\SaranaPrasarana;
use App\Exports\SaranaPrasaranaExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListSaranaPrasaranas extends ListRecords
{
    protected static string $resource = SaranaPrasaranaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new SaranaPrasaranaExport, 'Sarana_Prasarana.xlsx')),

            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = SaranaPrasarana::all();
                    $pdf = Pdf::loadView('exports.sarana-prasarana-umum-table', ['records' => $records])
                              ->setPaper('a4', 'landscape');
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Sarana_Prasarana.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
