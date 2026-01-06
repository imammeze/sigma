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
        Schema::create('kualifikasi_tendiks', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('jenis_tendik');
            $table->string('other_name')->nullable();
            $table->integer('s3')->nullable();
            $table->integer('s2')->nullable();
            $table->integer('s1')->nullable();
            $table->integer('d4')->nullable();
            $table->integer('d3')->nullable();
            $table->integer('d2')->nullable();
            $table->integer('d1')->nullable();
            $table->integer('sma')->nullable(); 
            $table->string('unit_kerja')->nullable();
            $table->json('ijazah_files')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kualifikasi_tendiks');
    }
};