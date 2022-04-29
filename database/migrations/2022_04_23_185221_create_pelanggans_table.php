<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelanggansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('agen_id');
            $table->string('kode')->unique();
            $table->string('slug')->unique();
            $table->string('nama');
            $table->enum('kategori', ['supplier', 'retail']);
            $table->text('alamat');
            $table->rememberToken();
            $table->string('total_pembelian')->nullable();
            $table->string('photo_ktp', 2048)->nullable();
            $table->string('photo_toko', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggans');
    }
}
