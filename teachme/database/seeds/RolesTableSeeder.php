<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'teacher',
            'slug' => 'teacher',
        ]);
        Role::create([
            'name' => 'student',
            'slug' => 'student',
        ]);
        Role::create([
            'name' => 'suspendido',
            'slug' => 'suspendido',
            'special' => 'no-access',
        ]);
    }
}
