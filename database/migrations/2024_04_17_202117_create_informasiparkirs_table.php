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
        Schema::create('informasiparkirs', function (Blueprint $table) {
            $table->id();
            $table->enum('blok',['blok-a','blok-b','blok-c']);
            $table->integer('jumlah_tempat')->default(0);
            $table->integer('tempat_terpakai')->default(0);
            $table->integer('sisa_tempat')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasiparkirs');
    }
};