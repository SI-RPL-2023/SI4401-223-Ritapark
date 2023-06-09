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
        Schema::create("bookings", function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId("user_id")
                ->references("id")
                ->on("users");
            $table
                ->foreignId("tickets_id")
                ->references("id")
                ->on("tickets");
            $table->integer("qty");
            $table->string("kode_promo")->nullable();
            $table->integer("total_harga")->nullable();
            $table->string("bukti_pembayaran")->nullable();
            $table->string("status");
            $table->string("metode")->nullable();
            $table->date("date");
            $table->integer("discount")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("bookings");
    }
};
