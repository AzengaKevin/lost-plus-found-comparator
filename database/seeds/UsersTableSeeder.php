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
            'name' =>'Azenga Kevin',
            'email' => 'azenga.kevin7@gmail.com',
            'phone_number' => '+254700016349',
            'national_identification_number' => '33708342',
        ]);
    }
}
