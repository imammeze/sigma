<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenggunaanDana extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'category',
        'subcategory',
        'penggunaan_dana',
        'ts_2','ts_1','ts',
        'bukti_pdf',
    ];

    protected $casts = [
        'ts_2' => 'integer',
        'ts_1' => 'integer',
        'ts'   => 'integer',
    ];
}