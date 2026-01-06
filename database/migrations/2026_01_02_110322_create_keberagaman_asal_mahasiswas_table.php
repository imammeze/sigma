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
        Schema::create('keberagaman_asal_mahasiswas', function (Blueprint $table) {
            $table->id();

            $table->enum('kategori', [
                'kota_kab_ps',
                'kabupaten_lain',
                'provinsi_ps',
                'provinsi_lain',
                'negara_ps',
                'negara_lain',
                'afirmasi',
                'berkebutuhan_khusus',
            ]);

            $table->string('nama_asal');

            $table->unsignedInteger('ts_2')->default(0);
            $table->unsignedInteger('ts_1')->default(0);
            $table->unsignedInteger('ts')->default(0);

            $table->text('link_bukti')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keberagaman_asal_mahasiswas');
    }
};
