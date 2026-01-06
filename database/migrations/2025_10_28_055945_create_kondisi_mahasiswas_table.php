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
        Schema::create('kondisi_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->enum('kategori', [
                'Mahasiswa Baru',
                'Mahasiswa Aktif pada saat TS',
                'Lulus pada saat TS',
                'Mengundurkan Diri/DO pada saat TS',
            ]);
            $table->integer('ts_2')->default(0);
            $table->integer('ts_1')->default(0);
            $table->integer('ts')->default(0);
            $table->integer('jumlah')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kondisi_mahasiswas');
    }
};