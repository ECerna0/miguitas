<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        # Create a client role
        $roleClient = \Spatie\Permission\Models\Role::create(['name' => 'client']);
        # Create an collaborator role
        $roleEditor = \Spatie\Permission\Models\Role::create(['name' => 'collaborator']);
        # Create a supervisor role
        $roleSupervisor = \Spatie\Permission\Models\Role::create(['name' => 'supervisor']);
        # Create a administrator role
        $roleSupervisor = \Spatie\Permission\Models\Role::create(['name' => 'administrator']);
    }
}
