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
        Schema::create('kepuasan_pengguna_lulusans', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kemampuan');
            $table->decimal('very_good', 5, 2);  
            $table->decimal('good', 5, 2);       
            $table->decimal('fair', 5, 2);       
            $table->decimal('poor', 5, 2);     
            $table->text('follow_up_plan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepuasan_pengguna_lulusans');
    }
};