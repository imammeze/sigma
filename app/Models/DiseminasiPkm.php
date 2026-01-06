<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiseminasiPkm extends Model
{
    protected $fillable = [
        'nama_dtpr',
        'judul',
        'diseminasi',
        'waktu',
        'link_bukti',
    ];
}