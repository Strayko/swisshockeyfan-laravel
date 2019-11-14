<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->id = 1;
        $user->tip_group_id = 1;
        $user->first_name = 'John';
        $user->last_name = 'Doe';
        $user->username = 'jhondoe1';
        $user->email = 'john.doe@mail.com';
        $user->password = Hash::make('johndoe123');
        $user->mobile_phone = '076 456 323';
        $user->telephone = '044 233 344';
        $user->street = 'Street 123';
        $user->post_code = '8332';
        $user->place = 'Pfaffikon';
        $user->points = 5;
        $user->save();
    }
}
