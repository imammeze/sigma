<?php

namespace App\Filament\Resources\RerataBebanDtprs\Pages;

use App\Filament\Resources\RerataBebanDtprs\RerataBebanDtprResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use App\Models\RerataBebanDtpr;
use App\Exports\RerataBebanDtprExport;
use Filament\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListRerataBebanDtprs extends ListRecords
{
    protected static string $resource = RerataBebanDtprResource::class;

    protected function getHeaderActions(): array
    {
        return [

            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new RerataBebanDtprExport, 'Rerata_Beban_DTPR.xlsx')),

            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = RerataBebanDtpr::all();
                    $pdf = Pdf::loadView('exports.rerata-beban-dtpr-table', ['records' => $records])
                              ->setPaper('a4', 'landscape');
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Rerata_Beban_DTPR.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
