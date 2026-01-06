<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengembanganDtprPenelitian extends Model
{
    protected $fillable = [
        'jenis_pengembangan_dtpr',
        'nama_dtpr',
        'tahun_akademik',
        'link_bukti',
    ];
}