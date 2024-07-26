<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create default administrator
        User::create([
            "username" => "Administrador",
            "name" => "Jonh",
            "last_name" => "Doe",
            "email" => "admin@miguitas.com",
            "password" => Hash::make("admin"),
            "role" => "admin",
        ])->assignRole('administrator');;
        //create default supervisor
        User::create([
            "username" => "Supervisor",
            "name" => "Jonh",
            "last_name" => "Doe",
            "email" => "supervisor@miguitas.com",
            "password" => Hash::make("supervisor"),
            "role" => "admin",
        ])->assignRole('supervisor');;
        User::create([
            "username" => "Collaborator",
            "name" => "Jonh",
            "last_name" => "Doe",
            "email" => "collaborator@miguitas.com",
            "password" => Hash::make("collaborator"),
            "role" => "admin",
        ])->assignRole('collaborator');;
    }
}
