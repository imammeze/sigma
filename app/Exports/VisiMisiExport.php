<?php

namespace App\Exports;

use App\Models\VisiMisi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class VisiMisiExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.visi-misi-table', [
            'records' => VisiMisi::all()
        ]);
    }

    public function title(): string
    {
        return 'Visi Misi';
    }
}