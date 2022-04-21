<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('kode')->unique();
            $table->string('nama');
            $table->string('slug')->unique();
            $table->string('email');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('kontak');
            $table->string('pegang_toko')->nullable();
            $table->string('ktp')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('photo', 2048)->nullable();
            $table->text('alamat');
            $table->string('sebagai')->default('sales');
            $table->string('omset')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('pegawais');
    }
}
