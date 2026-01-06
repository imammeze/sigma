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
        Schema::create('fleksibilitas_pembelajarans', function (Blueprint $table) {
            $table->id();
            $table->string('item_label');
            $table->unsignedInteger('ts_2')->nullable(); 
            $table->unsignedInteger('ts_1')->nullable(); 
            $table->unsignedInteger('ts')->nullable();   
            $table->string('evidence_link')->nullable();
            $table->unsignedTinyInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fleksibilitas_pembelajarans');
    }
};