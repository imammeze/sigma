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
        Schema::create('publikasi_penelitians', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dtpr');
            $table->string('judul_penelitian');
            $table->enum('jenis_publikasi', [
                'Internasional Bereputasi',
                'Internasional Tidak Bereputasi',
                'Jurnal Sinta 1','Jurnal Sinta 2','Jurnal Sinta 3',
                'Jurnal Sinta 4','Jurnal Sinta 5',
                'Tidak Terakreditasi',
            ]);
            $table->enum('tahun_terbit', ['TS', 'TS-1', 'TS-2']);
            $table->text('link_bukti')->nullable();  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publikasi_penelitians');
    }
};