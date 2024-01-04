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
        Schema::create('kotas', function (Blueprint $table) {
            $table->uuid('id_kota');
            $table->primary('id_kota');
            $table->string('nama_kota',50);
            $table->uuid('id_bioskop');
            $table->foreign('id_bioskop')->references('id_bioskop')->on('bioskops')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kotas');
    }
};
