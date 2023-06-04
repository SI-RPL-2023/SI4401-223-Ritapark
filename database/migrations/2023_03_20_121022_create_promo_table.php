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
        Schema::create("promo", function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("deskripsi");
            $table->date("tanggal_mulai");
            $table->date("tanggal_selesai");
            $table->enum("status", ['Aktif', 'Tidak Aktif'])->default('Aktif');
            $table->string("kode_promo");
            $table->unsignedInteger("potongan");
            $table->unsignedInteger("kuota_promo")->nullable();
            $table->unsignedInteger("terpakai_promo")->default(0);
            $table->string("gambar_promo");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("promo");
    }
};
