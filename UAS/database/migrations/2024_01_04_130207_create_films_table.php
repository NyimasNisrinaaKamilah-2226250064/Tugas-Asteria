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
            $table->uuid('id');
            $table->primary('id');
            $table->string('cover');
            $table->string('judul_film');
            $table->string('genre');
            $table->string('pemeran');
            $table->uuid('bioskop_id');
            $table->foreign('bioskop_id')->references('id')->on('bioskops')->cascadeOnDelete()->cascadeOnUpdate();
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
