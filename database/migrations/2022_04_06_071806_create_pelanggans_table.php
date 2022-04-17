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
            $table->foreignId('pegawai_id');
            $table->string('kode')->unique();
            $table->string('nama');
            $table->string('slug')->unique();
            $table->text('alamat');
            $table->string('kontak');
            $table->string('username')->unique();
            $table->string('email');
            $table->string('password');
            $table->string('photo_toko', 2048)->nullable();
            $table->string('photo_ktp', 2048)->nullable();
            $table->string('nota')->nullable();
            $table->string('jatuh_tempo')->nullable();
            $table->enum('keterangan', ['lunas', 'belum lunas'])->nullable();
            $table->string('limit')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
