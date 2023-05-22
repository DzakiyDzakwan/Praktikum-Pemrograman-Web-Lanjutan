<?php

namespace Database\Seeders;

use App\Models\UserEnrollment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserEnrollment::create([
            'user_id' => 1,
            'mata_kuliah_id' => 1,
        ]);

        UserEnrollment::create([
            'user_id' => 1,
            'mata_kuliah_id' => 2,
        ]);

        UserEnrollment::create([
            'user_id' => 2,
            'mata_kuliah_id' => 1,
        ]);

        UserEnrollment::create([
            'user_id' => 2,
            'mata_kuliah_id' => 2,
        ]);

        UserEnrollment::create([
            'user_id' => 3,
            'mata_kuliah_id' => 1,
        ]);

        UserEnrollment::create([
            'user_id' => 3,
            'mata_kuliah_id' => 2,
        ]);
    }
}
