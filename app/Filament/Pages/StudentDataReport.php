<?php

namespace App\Filament\Pages;

use App\Exports\DataMahasiswaExport;
use Filament\Pages\Page;
use Filament\Actions\Action;
use App\Models\DataMahasiswa;
use Filament\Actions\CreateAction;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\LaporanLengkapExport;
use App\Filament\Resources\DataMahasiswas\DataMahasiswaResource;

class StudentDataReport extends Page
{
    protected static \UnitEnum|string|null $navigationGroup = '2. Relevansi Pendidikan';
    protected static ?string $navigationLabel = 'Data Mahasiswa';

    protected static ?string $pluralModelLabel = 'Tabel 2.A.1 Data Mahasiswa';
    protected string $view = 'filament.pages.student-data-report';

    public function getViewData(): array
    {
        // Urutkan TS-3, TS-2, TS-1, TS
        $records = DataMahasiswa::orderByRaw(
            "FIELD(ts_label, 'TS-3','TS-2','TS-1','TS')"
        )->get();

        // Hitung total untuk baris "Jumlah"
        $totals = [
            'capacity'                      => $records->sum('capacity'),
            'applicants_total'             => $records->sum('applicants_total'),
            'applicants_affirmation'       => $records->sum('applicants_affirmation'),
            'applicants_special_needs'     => $records->sum('applicants_special_needs'),

            'new_regular_accepted'         => $records->sum('new_regular_accepted'),
            'new_regular_affirmation'      => $records->sum('new_regular_affirmation'),
            'new_regular_special_needs'    => $records->sum('new_regular_special_needs'),
            'new_rpl_accepted'             => $records->sum('new_rpl_accepted'),
            'new_rpl_affirmation'          => $records->sum('new_rpl_affirmation'),
            'new_rpl_special_needs'        => $records->sum('new_rpl_special_needs'),

            'active_regular_accepted'      => $records->sum('active_regular_accepted'),
            'active_regular_affirmation'   => $records->sum('active_regular_affirmation'),
            'active_regular_special_needs' => $records->sum('active_regular_special_needs'),
            'active_rpl_accepted'          => $records->sum('active_rpl_accepted'),
            'active_rpl_affirmation'       => $records->sum('active_rpl_affirmation'),
            'active_rpl_special_needs'     => $records->sum('active_rpl_special_needs'),
        ];

        return compact('records', 'totals');
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
            ->label('Ekspor Excel')
            ->icon('heroicon-o-document-chart-bar')
            ->color('success')
            ->action(function() {
                $data = $this->getViewData(); 
                return Excel::download(
                    new DataMahasiswaExport($data['records'], $data['totals']), 
                    'Data_Mahasiswa_Tabel_2A1.xlsx'
                );
            }),

        // 2. Ekspor PDF
        Action::make('exportPdf')
            ->label('Ekspor PDF')
            ->icon('heroicon-o-document-arrow-down')
            ->color('danger')
            ->action(function () {
                $data = $this->getViewData();
                $pdf = Pdf::loadView('exports.data-mahasiswa', $data)
                          ->setPaper('a4', 'landscape');
                
                return response()->streamDownload(
                    fn () => print($pdf->output()),
                    'Data_Mahasiswa_Tabel_2A1.pdf'
                );
            }),

            CreateAction::make('tambahData')
                ->label('Tambah Data Mahasiswa')
                ->icon('heroicon-o-plus-circle')
                ->url(fn () => DataMahasiswaResource::getUrl('create')),
        ];
    }
}