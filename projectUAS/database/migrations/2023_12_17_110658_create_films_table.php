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
        Schema::create('films', function (Blueprint $table) {
            $table->uuid('id_film');
            $table->primary('id_film');
            $table->string('cover');
            $table->string('judul_film',100);
            $table->string('genre',50);
            $table->string('pemeran');
            $table->uuid('id_jadwal');
            $table->foreign('id_jadwal')->references('id_jadwal')->on('jadwals')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
