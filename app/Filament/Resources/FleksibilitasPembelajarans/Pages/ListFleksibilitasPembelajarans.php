<?php

namespace App\Filament\Resources\FleksibilitasPembelajarans\Pages;

use App\Filament\Resources\FleksibilitasPembelajarans\FleksibilitasPembelajaranResource;
use Filament\Actions\CreateAction;
use App\Models\FleksibilitasPembelajaran;
use App\Exports\FleksibilitasPembelajaranExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListFleksibilitasPembelajarans extends ListRecords
{
    protected static string $resource = FleksibilitasPembelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new FleksibilitasPembelajaranExport, 'Fleksibilitas_Pembelajaran.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = FleksibilitasPembelajaran::all();
                    $pdf = Pdf::loadView('exports.fleksibilitas-pembelajaran-table', ['records' => $records])
                              ->setPaper('a4', 'portrait');
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Fleksibilitas_Pembelajaran.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
