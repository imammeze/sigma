<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KesesuaianBidangKerja extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'graduation_year_label',
        'total_graduates',
        'tracked_graduates',
        'job_infokom',
        'job_non_infokom',
        'scope_multinational',
        'scope_national',
        'scope_entrepreneur',
    ];

    protected $casts = [
        'total_graduates' => 'integer',
        'tracked_graduates' => 'integer',
        'job_infokom' => 'integer',
        'job_non_infokom' => 'integer',
        'scope_multinational' => 'integer',
        'scope_national' => 'integer',
        'scope_entrepreneur' => 'integer',
    ];
}