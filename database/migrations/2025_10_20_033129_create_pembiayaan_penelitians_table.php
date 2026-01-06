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
        Schema::create('pembiayaan_penelitians', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dtpr');              
            $table->string('judul_penelitian');     
            $table->integer('jumlah_mahasiswa')->nullable();
            $table->string('jenis_hibah_penelitian')->nullable();
            $table->enum('sumber', ['Lokal/Wilayah','Nasional','Internasional']);
            $table->integer('durasi')->nullable();     
            $table->bigInteger('ts_2')->default(0);
            $table->bigInteger('ts_1')->default(0);
            $table->bigInteger('ts')->default(0);
            $table->text('link_bukti')->nullable();   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembiayaan_penelitians');
    }
};