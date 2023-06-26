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
        Schema::create('produks', function (Blueprint $table) {
            $table->id('id_produk');
            $table->foreignId('id_produsen')->constrained();
            $table->foreignId('id_kategori')->constrained();
            $table->string('nama_produk');
            $table->text('deskripsi_produk');
            $table->string('kode_produk');
            $table->decimal('harga_produk', 10, 2);
            $table->integer('status_produk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
