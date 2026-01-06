<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SistemTataKelola extends Model
{
    protected $fillable = [
        'jenis_tata_kelola',
        'nama_sistem_informasi',
        'akses',
        'unit_kerja',
        'link_bukti',
    ];
}