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
        Schema::create('isi_pembelajarans', function (Blueprint $table) {
            $table->id();
            $table->string('mata_kuliah');
            $table->unsignedInteger('sks');
            $table->unsignedInteger('semester');
            $table->enum('profil_lulusan', ['PL 1', 'PL 2', 'PL 3', 'PL 4'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('isi_pembelajarans');
    }
};