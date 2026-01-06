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
        Schema::create('peta_pemenuhan_cpls', function (Blueprint $table) {
            $table->id();

            $table->enum('cpl', [
                'CPL 1','CPL 2','CPL 3','CPL 4','CPL 5',
                'CPL 6','CPL 7','CPL 8','CPL 9','CPL 10',
            ]);

            $table->enum('cpmk_choice', [
                'CPMK 01','CPMK 02','CPMK 03','CPMK 04','CPMK 05',
                'CPMK 06','CPMK 07','CPMK 08','CPMK 09','CPMK 10',
                'CPMK 11','CPMK 12','CPMK 13','CPMK 14',
                'LAINNYA',
            ])->nullable();
            $table->string('cpmk_custom')->nullable();
            for ($i = 1; $i <= 8; $i++) {
                $table->foreignId("semester_{$i}_mata_kuliah_id")
                    ->nullable()
                    ->constrained('isi_pembelajarans')
                    ->nullOnDelete();
            }
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peta_pemenuhan_cpls');
    }
};