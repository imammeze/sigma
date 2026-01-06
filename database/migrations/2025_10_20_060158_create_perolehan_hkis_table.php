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
        Schema::create('perolehan_hkis', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('jenis_hki');       
            $table->enum('tahun_terbit', ['TS', 'TS-1', 'TS-2']);
            $table->date('tanggal_terbit')->nullable();
            $table->text('link_bukti')->nullable();    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perolehan_hkis');
    }
};