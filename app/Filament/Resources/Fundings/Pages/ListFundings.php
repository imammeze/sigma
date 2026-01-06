<?php

namespace App\Filament\Resources\Fundings\Pages;

use App\Filament\Resources\Fundings\FundingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use App\Models\Funding;
use App\Exports\FundingExport;
use Filament\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListFundings extends ListRecords
{
    protected static string $resource = FundingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new FundingExport, 'Sumber_Pendanaan.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = Funding::all();
                    $pdf = Pdf::loadView('exports.funding-table', ['records' => $records])
                              ->setPaper('a4', 'landscape'); // Gunakan Landscape karena kolom nominal uang cukup lebar
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Sumber_Pendanaan.pdf'
                    );
                }),
            CreateAction::make()
             ->extraAttributes([
                'class' => 'bg-[#b3232b] text-white hover:bg-red-800',
            ]), 
        ];
    }
}