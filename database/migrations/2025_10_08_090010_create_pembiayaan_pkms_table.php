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
        Schema::create('pembiayaan_pkms', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dtpr');                 
            $table->string('judul_pkm')->nullable();                
            $table->integer('jumlah_mahasiswa')->nullable(); 
            $table->string('jenis_hibah_pkm')->nullable();  
            $table->enum('sumber_dana', ['Lokal/Wilayah','Nasional','Internasional'])->nullable();
            $table->integer('durasi')->nullable();      
            $table->integer('ts_2')->default(0);
            $table->integer('ts_1')->default(0);
            $table->integer('ts')->default(0);
            $table->string('bukti_pdf')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembiayaan_pkms');
    }
};