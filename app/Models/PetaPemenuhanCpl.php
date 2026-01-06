<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PetaPemenuhanCpl extends Model
{
    protected $fillable = [
        'cpl',
        'cpmk_choice',
        'cpmk_custom',
        'semester_1_mata_kuliah_id',
        'semester_2_mata_kuliah_id',
        'semester_3_mata_kuliah_id',
        'semester_4_mata_kuliah_id',
        'semester_5_mata_kuliah_id',
        'semester_6_mata_kuliah_id',
        'semester_7_mata_kuliah_id',
        'semester_8_mata_kuliah_id',
    ];

    public function getCpmkLabelAttribute(): string
    {
        return $this->cpmk_custom ?: ($this->cpmk_choice ?? '');
    }

    public function semester1Course() { return $this->belongsTo(IsiPembelajaran::class, 'semester_1_mata_kuliah_id'); }
    public function semester2Course() { return $this->belongsTo(IsiPembelajaran::class, 'semester_2_mata_kuliah_id'); }
    public function semester3Course() { return $this->belongsTo(IsiPembelajaran::class, 'semester_3_mata_kuliah_id'); }
    public function semester4Course() { return $this->belongsTo(IsiPembelajaran::class, 'semester_4_mata_kuliah_id'); }
    public function semester5Course() { return $this->belongsTo(IsiPembelajaran::class, 'semester_5_mata_kuliah_id'); }
    public function semester6Course() { return $this->belongsTo(IsiPembelajaran::class, 'semester_6_mata_kuliah_id'); }
    public function semester7Course() { return $this->belongsTo(IsiPembelajaran::class, 'semester_7_mata_kuliah_id'); }
    public function semester8Course() { return $this->belongsTo(IsiPembelajaran::class, 'semester_8_mata_kuliah_id'); }
}