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
        Schema::create('sistem_tata_kelolas', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_tata_kelola');
            $table->string('nama_sistem_informasi');
            $table->enum('akses', ['Internet', 'Lokal']); 
            $table->string('unit_kerja');
            $table->text('link_bukti')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sistem_tata_kelolas');
    }
};