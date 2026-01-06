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
        Schema::create('rerata_masa_tunggu_luluses', function (Blueprint $table) {
            $table->id();
            $table->enum('graduation_year_label', ['TS-1', 'TS-2', 'TS-3']);
            $table->unsignedInteger('total_graduates');      
            $table->unsignedInteger('tracked_graduates');    
            $table->decimal('avg_waiting_time', 4, 2);     
            $table->decimal('response_rate', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rerata_masa_tunggu_luluses');
    }
};