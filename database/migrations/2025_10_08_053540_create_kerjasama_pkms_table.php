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
        Schema::create('kerjasama_pkms', function (Blueprint $table) {
            $table->id();
            $table->string('judul_kerjasama');          
            $table->string('mitra_kerjasama');       
            $table->string('nama_dosen');               
            $table->enum('sumber', ['Lokal/Wilayah', 'Nasional', 'Internasional']); 
            $table->integer('durasi')->nullable();      
            $table->bigInteger('ts_2')->default(0);
            $table->bigInteger('ts_1')->default(0);
            $table->bigInteger('ts')->default(0);
            $table->string('status')->nullable();       
            $table->string('bukti')->nullable();    
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kerjasama_pkms');
    }
};