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
        Schema::create('bioskops', function (Blueprint $table) {
            $table->uuid('id_bioskop');
            $table->primary('id_bioskop');
            $table->string('foto');
            $table->string('nama_bioskop',15);
            $table->string('alamat_bioskop');
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
        Schema::dropIfExists('bioskops');
    }
};
