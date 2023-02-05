<?php

namespace Database\Seeders;

use App\Models\Gender;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'role_name' => 'Admin',
        ]);

        Role::create([
            'role_name' => 'User',
        ]);

        Gender::create([
            'gender_desc' => 'Male',
        ]);

        Gender::create([
            'gender_desc' => 'Female',
        ]);

        User::create([
            'role_id' => 1,
            'gender_id' => 1,
            'first_name' => 'Leonardo',
            'last_name' => 'Wijaya',
            'email' => 'leonardo.wijaya003@binus.ac.id',
            'password' => Hash::make('admin123'),
            'display_picture_link' => 'images/users/Leonardo-Wijaya/1.jpg'
        ]);

        User::create([
            'role_id' => 2,
            'gender_id' => 1,
            'first_name' => 'User',
            'last_name' => '1',
            'email' => 'user@user.com',
            'password' => Hash::make('user123'),
            'display_picture_link' => 'images/users/User-1/1.jpg'
        ]);
    }
}
