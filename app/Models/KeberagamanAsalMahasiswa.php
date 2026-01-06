<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeberagamanAsalMahasiswa extends Model
{
    protected $fillable = [
        'kategori',
        'nama_asal',
        'ts_2',
        'ts_1',
        'ts',
        'link_bukti',
    ];

    protected $casts = [
        'ts_2' => 'integer',
        'ts_1' => 'integer',
        'ts'   => 'integer',
    ];

    /* TOTAL tidak disimpan, dihitung */
    public function getTotalAttribute(): int
    {
        return $this->ts_2 + $this->ts_1 + $this->ts;
    }

    public function getKategoriLabelAttribute(): string
    {
        return match ($this->kategori) {
            'kota_kab_ps' => 'Kota/Kab sama dengan PS',
            'kabupaten_lain' => 'Kabupaten Lain',
            'provinsi_ps' => 'Provinsi sama dengan PS',
            'provinsi_lain' => 'Provinsi Lain',
            'negara_ps' => 'Negara sama dengan PS',
            'negara_lain' => 'Negara Lain',
            'afirmasi' => 'Afirmasi',
            'berkebutuhan_khusus' => 'Berkebutuhan Khusus',
        };
    }
}
