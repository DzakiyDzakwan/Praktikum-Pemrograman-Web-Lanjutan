<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //user 1
        User::create([
            'username' => 'userseeder1',
            'email' => 'userseeder1@gmail.com',
            'password' => 'userseeder1',
            'jenis_kelamin' => 'LK',
            'role' => 'mahasiswa'
        ]);

        User::create([
            'username' => 'userseeder2',
            'email' => 'userseeder2@gmail.com',
            'password' => 'userseeder2',
            'jenis_kelamin' => 'LK',
            'role' => 'mahasiswa'
        ]);

        User::create([
            'username' => 'userseeder3',
            'email' => 'userseeder3@gmail.com',
            'password' => 'userseeder3',
            'jenis_kelamin' => 'LK',
            'role' => 'mahasiswa'
        ]);
    }
}
