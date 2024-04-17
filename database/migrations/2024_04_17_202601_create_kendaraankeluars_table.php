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
        Schema::create('kendaraankeluars', function (Blueprint $table) {
            $table->id('id_parkir')->unique();
            $table->string('blok', 255);
            $table->string('nopol', 255);
            $table->string('jenis_kendaraan', 255);
            $table->datetime('masuk');
            $table->dateTime('keluar');
            $table->time('durasi_parkir');
            $table->integer('biaya')->nullable();
            $table->integer('bayar')->nullable();
            $table->integer('kembalian')->nullable();            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraankeluars');
    }
};