<?php

namespace App\Exports;

use App\Models\SaranaPrasaranaPkm;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SaranaPrasaranaPkmExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.sarana-prasarana-pkm-table', [
            'records' => SaranaPrasaranaPkm::all()
        ]);
    }

    public function title(): string
    {
        return 'Sarpras PKM';
    }
}