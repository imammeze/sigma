<?php

namespace App\Filament\Resources\RekognisiLulusans\Pages;

use App\Filament\Resources\RekognisiLulusans\RekognisiLulusanResource;
use Filament\Actions\CreateAction;
use App\Models\RekognisiLulusan;
use App\Exports\RekognisiLulusanExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListRekognisiLulusans extends ListRecords
{
    protected static string $resource = RekognisiLulusanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new RekognisiLulusanExport, 'Rekognisi_Lulusan.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = RekognisiLulusan::all();
                    $pdf = Pdf::loadView('exports.rekognisi-lulusan-table', ['records' => $records])
                              ->setPaper('a4', 'landscape'); // Landscape karena kolom summary cukup padat
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Rekognisi_Lulusan.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
