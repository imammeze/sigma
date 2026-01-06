<?php

namespace App\Exports;

use App\Models\SaranaPrasarana; // Pastikan nama model sesuai
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SaranaPrasaranaExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.sarana-prasarana-umum-table', [
            'records' => SaranaPrasarana::all()
        ]);
    }

    public function title(): string
    {
        return 'Sarana Prasarana';
    }
}