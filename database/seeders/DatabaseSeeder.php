<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pegawai;
use App\Models\Pelanggan;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'nama' => 'Arfan Lusiandro',
            'slug' => 'arfan-lusiandro',
            'kode' => 'A1',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'is_admin' => true,
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'nama' => 'Arfan Lusiandro',
            'slug' => 'lusiandro',
            'kode' => 'A1',
            'email' => 'admin1@gmail.com',
            'username' => 'admin1',
            'is_admin' => false,
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10)
        ]);
        Pegawai::create([
            'user_id' => '1',
            'kode' => 'A1',
            'nama' => 'Arfan Lusiandro',
            'slug' => 'arfan',
            'email' => 'sales@gmail.com',
            'username' => 'sales',
            'kontak' => '089',
            'alamat' => 'Subang, Jawa Barat',
            'sebagai' => 'sales',
            'password' => bcrypt('password'),
            'ktp'       => 'test.jpg',
            'photo'     => 'test.jpg',
            'remember_token' => Str::random(10),
        ]);
        Pegawai::create([
            'user_id' => '1',
            'nama' => 'Arfan Lusiandro',
            'slug' => 'arlus',
            'kode' => 'A2',
            'email' => 'kasir@gmail.com',
            'username' => 'kasir',
            'kontak' => '089',
            'alamat' => 'Subang, Jawa Barat',
            'sebagai' => 'kasir',
            'password' => bcrypt('password'),
            'ktp'       => 'test.jpg',
            'photo'     => 'test.jpg',
            'remember_token' => Str::random(10)
        ]);
        Pelanggan::create([
            'user_id' => '1',
            'pegawai_id' => '2',
            'kode' => 'P1',
            'nama' => 'Sigit',
            'slug' => 'sigit',
            'email' => 'sigit@gmail.com',
            'username' => 'sigit',
            'password' => bcrypt('password'),
            'kontak' => '081',
            'alamat' => 'Bogor',
            'kategori' => 'supplier',
            'remember_token' => Str::random(10)
        ]);
        Pelanggan::create([
            'user_id' => '1',
            'pegawai_id' => '1',
            'kode' => 'P2',
            'nama' => 'Yudha',
            'slug' => 'yudha',
            'email' => 'yudha@gmail.com',
            'username' => 'yudha',
            'password' => bcrypt('password'),
            'kontak' => '081',
            'alamat' => 'Cileungsi',
            'kategori' => 'retail',
            'remember_token' => Str::random(10)
        ]);
    }
}
