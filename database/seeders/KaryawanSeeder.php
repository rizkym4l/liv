<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Employee::create([
                'name' => $faker->name,
                'birth_place' => $faker->city,
                'birth_date' => $faker->date,
                'nik' => $faker->numerify('##############'),
                'phone_number' => $faker->phoneNumber,
                'status' => $faker->randomElement(['sudah', 'belum']),
                'religion' => $faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha']),
            ]);
        }
    }
}
