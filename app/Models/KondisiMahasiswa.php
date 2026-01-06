<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KondisiMahasiswa extends Model
{
    protected $fillable = ['kategori','ts_2','ts_1','ts','jumlah'];

    protected $casts = [
        'ts_2' => 'integer',
        'ts_1' => 'integer',
        'ts'   => 'integer',
        'jumlah' => 'integer',
    ];
}