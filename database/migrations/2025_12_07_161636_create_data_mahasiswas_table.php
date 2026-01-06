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
        Schema::create('data_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->enum('ts_label', ['TS-3', 'TS-2', 'TS-1', 'TS']);
            $table->unsignedInteger('capacity');
            $table->unsignedInteger('applicants_total');            
            $table->unsignedInteger('applicants_affirmation');      
            $table->unsignedInteger('applicants_special_needs');            

            $table->unsignedInteger('new_regular_accepted');       
            $table->unsignedInteger('new_regular_affirmation');    
            $table->unsignedInteger('new_regular_special_needs');  

            $table->unsignedInteger('new_rpl_accepted');            
            $table->unsignedInteger('new_rpl_affirmation');         
            $table->unsignedInteger('new_rpl_special_needs');     

            $table->unsignedInteger('active_regular_accepted');     
            $table->unsignedInteger('active_regular_affirmation'); 
            $table->unsignedInteger('active_regular_special_needs');

            $table->unsignedInteger('active_rpl_accepted');         
            $table->unsignedInteger('active_rpl_affirmation');      
            $table->unsignedInteger('active_rpl_special_needs');   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_mahasiswas');
    }
};