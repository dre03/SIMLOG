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
         Schema::create('pengiriman', function (Blueprint $table) {
            $table->id('id_pengiriman');
            $table->foreignId('id_distributor')->constrained('distributors');
            $table->foreignId('id_produk')->constrained('produks');
            $table->foreignId('id_toko')->constrained('tokos');
            $table->date('tanggal_pengiriman');
            $table->integer('jumlah_produk_pengiriman');
            $table->integer('status_pengiriman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegiriman');
    }
};
