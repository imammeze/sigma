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
        Schema::create('rekognisi_lulusans', function (Blueprint $table) {
            $table->id();
            $table->string('recognition_source');
            $table->string('recognition_type')->nullable();
            $table->unsignedInteger('ts_3')->nullable(); 
            $table->unsignedInteger('ts_2')->nullable(); 
            $table->unsignedInteger('ts_1')->nullable();
            $table->text('evidence_link')->nullable();
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekognisi_lulusans');
    }
};