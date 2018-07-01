<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        for ($i=0; $i < 2; $i++) { 

	    	DB::table('users')->insert([

            'name' => str_random(10),
            'worker_id' => str_random(10),
            'position' => str_random(10),
            'email' => str_random(12).'@gmail.com',
            'center' => str_random(10),
            'district' => str_random(10),
            'phone_no' => '0766457248',
            'password' => bcrypt(str_random(10)),
	        ]);

    	}
    }
}
