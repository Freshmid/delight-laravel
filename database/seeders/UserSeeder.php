<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "email" => "testaja",
            "gambar" => "user1.jpg",
            "password" => bcrypt("admin"),
            "nama" => "delighter",
            // "tanggal_lahir" => "2001-07-01",
        ]);

        User::create([
            "email" => "coba@gmail.com",
            "gambar" => "user1.jpg",
            "password" => bcrypt("coba"),
            "nama" => "delighter",
            // "tanggal_lahir" => "2001-07-01",
        ]);
    }
}
