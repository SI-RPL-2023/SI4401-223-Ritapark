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
        Schema::create('testimonis', function (Blueprint $table) {
        $table->id()->autoIncrement();
        $table->string('nama_depan');
        $table->string('nama_belakang')->nullable();
        $table->string('email');
        $table->date('tanggal');
        $table->longText('testimoni_text');
        $table->string('rating');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("testimoni");
    }
};
