<?php

namespace App\Filament\Resources\RerataMasaTungguLuluses\Pages;

use App\Filament\Resources\RerataMasaTungguLuluses\RerataMasaTungguLulusResource;
use Filament\Actions\CreateAction;
use App\Models\RerataMasaTungguLulus;
use App\Exports\RerataMasaTungguLulusExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListRerataMasaTungguLuluses extends ListRecords
{
    protected static string $resource = RerataMasaTungguLulusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new RerataMasaTungguLulusExport, 'Rerata_Masa_Tunggu_Lulus.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = RerataMasaTungguLulus::orderBy('graduation_year_label')->get();
                    $pdf = Pdf::loadView('exports.rerata-masa-tunggu-table', ['records' => $records])
                              ->setPaper('a4', 'portrait');
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Rerata_Masa_Tunggu_Lulus.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
