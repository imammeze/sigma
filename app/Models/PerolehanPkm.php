<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerolehanPkm extends Model
{
     protected $fillable = [
        'judul',
        'jenis_hki',
        'nama_dtpr',
        'tahun_perolehan',
        'bukti_dokumen',
    ];
}