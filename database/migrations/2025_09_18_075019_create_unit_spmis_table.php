<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('unit_spmis', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_unit_spmi');   
            $table->string('nama_unit_spmi');
            $table->text('dokumen_spmi')->nullable();
            $table->text('bukti_certified_auditor')->nullable();
            $table->text('laporan_audit')->nullable();
            $table->integer('jumlah_auditor')->nullable();
            $table->integer('certified')->nullable();
            $table->integer('non_certified')->nullable();
            $table->integer('frekuensi_audit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unit_spmis');
    }
};