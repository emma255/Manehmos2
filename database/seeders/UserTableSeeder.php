<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::firstOrCreate(
            ['email' => 'aemmanuel199@gmail.com'],
            [
            'name' =>  'Manehmos Super Administrator',
            'worker_id' =>  'MANEHMOS2',
            'position' =>     'System Administrator',
            'phone_no' =>    '0000000000',
            'center' =>   'sawala dispensary',
            'district' =>  'Mufindi',
            'password' =>  bcrypt('aemmanuel199@gmail.com'),
            'remember_token' => 'BCbZa7FB7rul7wMcRSJG7rGqtTUakRC1UPCmR80jKRs1tlLHTwCiIV36HuLC',
        ]);
    }
}
