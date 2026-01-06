<?php

namespace App\Exports;

use App\Models\FleksibilitasPembelajaran;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class FleksibilitasPembelajaranExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.fleksibilitas-pembelajaran-table', [
            'records' => FleksibilitasPembelajaran::all()
        ]);
    }

    public function title(): string
    {
        return 'Fleksibilitas Pembelajaran';
    }
}