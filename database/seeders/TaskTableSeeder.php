<?php

namespace Database\Seeders;

use App\Models\Tasks;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i < 30; $i++) {
            Tasks::create([
                'name' => $faker->realText(20),
                'participant' => $faker->name(),
                'comments' => $faker->realText(50),
                'start_date' => $faker->date(),
                'end_date' => $faker->date(),
            ]);
        }
    }
}
