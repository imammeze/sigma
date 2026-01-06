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
        Schema::create('rerata_beban_dtprs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dtpr');
            $table->decimal('sks_ps_sendiri', 8, 2)->nullable();
            $table->decimal('sks_ps_lain_pt_sendiri', 8, 2)->nullable();
            $table->decimal('sks_pt_lain', 8, 2)->nullable();
            $table->decimal('sks_penelitian', 8, 2)->nullable();
            $table->decimal('sks_pengabdian', 8, 2)->nullable();
            $table->decimal('sks_manajemen_pt_sendiri', 8, 2)->nullable();
            $table->decimal('sks_manajemen_pt_lain', 8, 2)->nullable();
            $table->decimal('total_sks', 8, 2)->nullable();
            $table->text('evidence')->nullable();
            $table->string('hki')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rerata_beban_dtprs');
    }
};