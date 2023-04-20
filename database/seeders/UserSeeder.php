<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            "name" => "Admin Simpedak",
            "email" => "adminsimpedak@gmail.com",
            "password" => bcrypt("password")
        ]);
        $admin->assignRole("Admin");

        $owner = Client::create([
            "name" => "Burhan",
            "slug" => "burhan",
            "contact" => "085655136417",
            "address" => "Jalan Ikan Paus IV/D-12, Jember",
            "email" => "cvberkahetawa@gmail.com",
            "password" => bcrypt("iniPa55word"),
            "description" => "Pabrik pengolahan susu kambing etawa"
        ]);
        $owner->assignRole("Owner");

        Business::create([
            "client_id" => $owner->id,
            "name" => "Berkah Etawa",
            "slug" => "berkah-etawa"
        ]);

        $supplier = Client::create([
            "name" => "Pak Edi",
            "slug" => "pak-edi",
            "contact" => "085655136417",
            "address" => "Jalan Ikan Paus IV/B-6, Jember",
            "email" => "ediii23@gmail.com",
            "password" => bcrypt("iniPa55word"),
            "description" => "Peternakan kambing etawa"
        ]);
        $supplier->assignRole("Supplier");
    }
}
