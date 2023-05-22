<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Matakuliah;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Matakuliah::create([
            'nama' => 'Matematika Dasar'
        ]);
        
        Matakuliah::create([
            'nama' => 'Dasar Pemrograman'
        ]);
    }
}
