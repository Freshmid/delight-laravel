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
           "email"=>"testaja",
           "password"=>bcrypt("admin"),
           "nama"=>"delighter",
        ]);

        User::create([
            "email"=>"coba@gmail.com",
            "password"=>bcrypt("coba"),
            "nama"=>"delighter",
         ]);
    }
}
