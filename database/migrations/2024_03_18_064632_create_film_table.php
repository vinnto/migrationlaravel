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
        Schema::create('film', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('ringkasan');
            $table->integer('tahun');
            $table->string('poster');
            // $table->timestamps();
            $table->unsignedBigInteger('genre_id')->unique();
            $table->foreign('genre_id')->references('id')->on('genre');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film');
    }
};
