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
            $table->uuid('id');
            $table->primary('id');
            $table->string('foto');
            $table->string('nama_bioskop');
            $table->string('alamat_bioskop');
            $table->uuid('kota_id');
            $table->foreign('kota_id')->references('id')->on('kotas')->cascadeOnDelete()->cascadeOnUpdate();
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
