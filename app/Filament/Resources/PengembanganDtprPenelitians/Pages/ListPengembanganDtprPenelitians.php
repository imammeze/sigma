<?php

namespace App\Filament\Resources\PengembanganDtprPenelitians\Pages;

use App\Filament\Resources\PengembanganDtprPenelitians\PengembanganDtprPenelitianResource;
use Filament\Actions\CreateAction;
use App\Models\PengembanganDtprPenelitian;
use App\Exports\PengembanganDtprExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListPengembanganDtprPenelitians extends ListRecords
{
    protected static string $resource = PengembanganDtprPenelitianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new PengembanganDtprExport, 'Pengembangan_DTPR.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = PengembanganDtprPenelitian::orderBy('tahun_akademik', 'desc')->get();
                    $pdf = Pdf::loadView('exports.pengembangan-dtpr-table', ['records' => $records])
                              ->setPaper('a4', 'portrait');
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Pengembangan_DTPR.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
