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
        Schema::create('pengembangan_dtpr_penelitians', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_pengembangan_dtpr');
            $table->string('nama_dtpr');
            $table->enum('tahun_akademik', ['TS', 'TS-1', 'TS-2']);
            $table->text('link_bukti')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembangan_dtpr_penelitians');
    }
};