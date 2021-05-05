<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $admin = User::firstOrCreate(
            ['email' => 'aemmanuel199@gmail.com'],
            [
                'name' => 'Manehmos Super Administrator',
                'worker_id' => 'MANEHMOS2',
                'position' => 'System Administrator',
                'phone_no' => '0000000000',
                'center' => 'sawala dispensary',
                'district' => 'Mufindi',
                'password' => bcrypt('aemmanuel199@gmail.com'),
                'remember_token' => Str::random(20),
            ]
        );

        $centers = ['sawala dispensary', 'kalinga', 'mdabulo', 'mtwango', 'mkonge', 'kibao', 'mlalakuwa'];

        for ($i = 1; $i < 30; $i++) {
            $email = $faker->unique()->safeEmail;
            User::create([
                'name' =>  $faker->name,
                'email' => $email,
                'worker_id' =>  'MANEHMOS' . $faker->unique()->randomNumber(),
                'position' => $faker->randomElement(['System Administrator', 'Clinical Attendant', 'Doctor']),
                'phone_no' =>    $faker->e164PhoneNumber,
                'center' =>   $faker->randomElement($centers),
                'district' =>  $faker->city,
                'password' =>  bcrypt($email),
                'remember_token' => Str::random(20),
            ]);
        }
    }
}
