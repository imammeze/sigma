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
        Schema::create('pemetaan_cpl_pls', function (Blueprint $table) {
            $table->id();
             $table->enum('cpl', [
                'CPL 1','CPL 2','CPL 3','CPL 4','CPL 5',
                'CPL 6','CPL 7','CPL 8','CPL 9','CPL 10',
            ]);
            $table->enum('pl', ['PL 1','PL 2','PL 3','PL 4']);
            $table->unique(['cpl', 'pl']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemetaan_cpl_pls');
    }
};