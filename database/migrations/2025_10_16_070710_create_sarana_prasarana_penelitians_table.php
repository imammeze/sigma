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
        Schema::create('sarana_prasarana_penelitians', function (Blueprint $table) {
            $table->id();
            $table->string('nama_prasarana');
            $table->integer('daya_tampung')->nullable();
            $table->integer('luas_ruang')->nullable();
            $table->enum('status', ['milik', 'sewa']);
            $table->enum('lisensi', ['berlisensi', 'public_domain', 'tidak_berlisensi'])->nullable();
            $table->longText('perangkat')->nullable();   
            $table->string('bukti_file')->nullable();  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sarana_prasarana_penelitians');
    }
};