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
        Schema::create('produsens', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produsen');
            $table->integer('no_telp_produsen');
            $table->text('alamat_produsen');
            $table->integer('status_produsen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produsens');
    }
};
