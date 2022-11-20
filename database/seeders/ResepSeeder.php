<?php

namespace Database\Seeders;

use App\Models\Resep;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resep::create([
            "user_id" => 1,
            "kategori_id" => 1,
            "nama" => "Es Buah",
            "deskripsi" => "Ini namanya resep es buah enak",
            "gambar" => "Contoh Procedure Text 'Cara Membuat Es Buah' Dalam Bahasa Inggris Beserta Artinya.png"
        ]);
        Resep::create([
            "user_id" => 1,
            "kategori_id" => 1,
            "nama" => "Ayam Mentega",
            "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "gambar" => "img-butter-chicken.webp"
        ]);
        Resep::create([
            "user_id" => 1,
            "kategori_id" => 2,
            "nama" => "Tumis Kangkung",
            "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "gambar" => "images_sayuran_Tumis-kangkung-udang1.jpg"
        ]);
        Resep::create([
            "user_id" => 1,
            "kategori_id" => 3,
            "nama" => "Chocolate Cake",
            "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "gambar" => "img-chocolate-fudge-cake.webp"
        ]);
        Resep::create([
            "user_id" => 1,
            "kategori_id" => 5,
            "nama" => "Sate Taichan",
            "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "gambar" => "Sate Taichan Fenomenal yang Praktis dan Lezat - Resep _ ResepKoki.jpg"
        ]);
        Resep::create([
            "user_id" => 1,
            "kategori_id" => 4,
            "nama" => "Pempek Palembang",
            "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "gambar" => "Pempek Ikan Palembang Saus Cuko (Indonesian Fish Cakes).jpg"
        ]);
    }
}
