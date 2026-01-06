<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funding extends Model
{
    protected $table = 'fundings';

    protected $guarded = [];
    
    protected $fillable = [
        'category',
        'subcategory',
        'other_name',
        'sumber_pendanaan',
        'ts',
        'ts_1',
        'ts_2',
        'bukti_pdf',
    ];

    protected $casts = [
        'ts'   => 'integer',
        'ts_1' => 'integer',
        'ts_2' => 'integer',
    ];
}