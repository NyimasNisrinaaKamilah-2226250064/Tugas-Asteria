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
        Schema::create('detail_films', function (Blueprint $table) {
            $table->uuid('id_detail');
            $table->primary('id_detail');
            $table->string('sinopsis');
            $table->string('rumah_produksi');
            $table->string('sutradara');
            $table->string('tahun_release');
            $table->string('produser');
            $table->string('penulis');
            $table->uuid('id_film');
            $table->foreign('id_film')->references('id_film')->on('films')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_films');
    }
};
