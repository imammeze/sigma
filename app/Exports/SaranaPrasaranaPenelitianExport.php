<?php

namespace App\Exports;

use App\Models\SaranaPrasaranaPenelitian;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SaranaPrasaranaPenelitianExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.sarana-prasarana-table', [
            'records' => SaranaPrasaranaPenelitian::all()
        ]);
    }

    public function title(): string
    {
        return 'Sarpras Penelitian';
    }
}