<?php

namespace App\Filament\Resources\SaranaPrasaranaPenelitians\Pages;

use App\Filament\Resources\SaranaPrasaranaPenelitians\SaranaPrasaranaPenelitianResource;
use Filament\Actions\CreateAction;
use App\Models\SaranaPrasaranaPenelitian;
use App\Exports\SaranaPrasaranaPenelitianExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListSaranaPrasaranaPenelitians extends ListRecords
{
    protected static string $resource = SaranaPrasaranaPenelitianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new SaranaPrasaranaPenelitianExport, 'Sarpras_Penelitian.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = SaranaPrasaranaPenelitian::all();
                    $pdf = Pdf::loadView('exports.sarana-prasarana-table', ['records' => $records])
                              ->setPaper('a4', 'landscape'); 
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Sarpras_Penelitian.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
