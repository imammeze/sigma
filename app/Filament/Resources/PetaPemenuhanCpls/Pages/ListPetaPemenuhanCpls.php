<?php

namespace App\Filament\Resources\PetaPemenuhanCpls\Pages;

use App\Filament\Resources\PetaPemenuhanCpls\PetaPemenuhanCplResource;
use Filament\Actions\CreateAction;
use App\Models\PetaPemenuhanCpl;
use App\Exports\PetaPemenuhanCplExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListPetaPemenuhanCpls extends ListRecords
{
    protected static string $resource = PetaPemenuhanCplResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new PetaPemenuhanCplExport, 'Peta_Pemenuhan_CPL.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = PetaPemenuhanCpl::with([
                        'semester1Course', 'semester2Course', 'semester3Course', 'semester4Course',
                        'semester5Course', 'semester6Course', 'semester7Course', 'semester8Course'
                    ])->get();

                    $pdf = Pdf::loadView('exports.peta-pemenuhan-cpl-table', ['records' => $records])
                              ->setPaper('a4', 'landscape'); // Landscape wajib karena ada 11 kolom
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Peta_Pemenuhan_CPL.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
