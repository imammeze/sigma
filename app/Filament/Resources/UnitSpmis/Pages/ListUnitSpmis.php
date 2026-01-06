<?php

namespace App\Filament\Resources\UnitSpmis\Pages;

use App\Filament\Resources\UnitSpmis\UnitSpmiResource;
use Filament\Actions\CreateAction;
use App\Models\UnitSpmi;
use App\Exports\UnitSpmiExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListUnitSpmis extends ListRecords
{
    protected static string $resource = UnitSpmiResource::class;

    protected function getHeaderActions(): array
    {
        return [

            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new UnitSpmiExport, 'Unit_SPMI.xlsx')),

            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = UnitSpmi::all();
                    $pdf = Pdf::loadView('exports.unit-spmi-table', ['records' => $records])
                              ->setPaper('a4', 'landscape'); // Menggunakan Landscape karena kolom lebar
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Unit_SPMI.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
