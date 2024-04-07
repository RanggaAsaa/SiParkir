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
        Schema::create('informasimasuks', function (Blueprint $table) {
            $table->id();
            $table->string('blok',255);
            $table->integer('jumlah_tempat',15)->default(0);
            $table->integer('tempat_terpakai',15)->default(0);
            $table->integer('sisa_tempat',15)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasimasuks');
    }
};
