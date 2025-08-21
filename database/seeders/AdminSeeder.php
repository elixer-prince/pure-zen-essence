<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::create([
            "first_name" => "Daniel",
            "last_name" => "Leith",
            "email" => "danielleith3@gmail.com",
            "password" => bcrypt("DanielLeith@876"),
        ]);

        Admin::create([
            "first_name" => "Yoshika",
            "last_name" => "Leith",
            "email" => "purezenessence@gmail.com",
            "password" => bcrypt("Password@123"),
        ]);
    }
}
