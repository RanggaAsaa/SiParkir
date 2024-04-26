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
        Schema::create('kendaraanmasuks', function (Blueprint $table) {
            $table->id();
            $table->enum('blok',['blok-a','blok-b','blok-c']);
            $table->string('nopol', 255)->unique();
            $table->enum('jenis_kendaraan', ['motor','mobil']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraanmasuks');
    }
};