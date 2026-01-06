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
        Schema::create('kesesuaian_bidang_kerjas', function (Blueprint $table) {
            $table->id();
            $table->enum('graduation_year_label', ['TS-3', 'TS-2', 'TS-1']);
            $table->unsignedInteger('total_graduates');        
            $table->unsignedInteger('tracked_graduates');      
            $table->unsignedInteger('job_infokom');           
            $table->unsignedInteger('job_non_infokom');        
            $table->unsignedInteger('scope_multinational');    
            $table->unsignedInteger('scope_national');         
            $table->unsignedInteger('scope_entrepreneur');     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesesuaian_bidang_kerjas');
    }
};