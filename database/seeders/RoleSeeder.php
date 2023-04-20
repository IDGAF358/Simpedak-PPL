<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(["guard_name" => "web", "name" => "Admin"]);
        Role::create(["guard_name" => "client", "name" => "Owner"]);
        Role::create(["guard_name" => "client", "name" => "Supplier"]);
    }
}
