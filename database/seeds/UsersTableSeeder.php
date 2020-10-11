<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' =>'Super Admin',
            'email' => 'admin@gmail.com',
            'phone_number' => '+254700000000',
            'national_identification_number' => '00000000',
        ]);
    }
}
