<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
//        DB::table('users')->insert([
//            'password' =>app('hash')->make('yourpassword'),
//            'firstName' => ('mai'),
//            'lastName' => ('mohamed'),
//            'middleName' => (''),
//            'username' => ('mai'),
//            'email' => ('mai@gmail.com'),
//            'address' => ('B2'),
//            'zipCode' => ('960'),
//            'mobile' => ('786542'),
//            'city' => ('Hulhule'),
//            'state' => ('Henveru'),
//            'country' => ('Maldives'),
//            'isActive'=>1,
//        ]);
        DB::table('users')->insert(array(
            0 =>
            array(
                'uid' => str_random(36),
                'password' => app('hash')->make('yourpassword'),
                'firstName' => ('mai'),
                'lastName' => ('mohamed'),
                'middleName' => (''),
                'username' => ('mai'),
                'email' => ('mai@gmail.com'),
                'address' => ('B2'),
                'zipCode' => ('960'),
                'mobile' => ('786542'),
                'city' => ('Hulhule'),
                'state' => ('Henveru'),
                'country' => ('Maldives'),
                'isActive' => 1,
            ),
            1 =>
            array(
                'uid' => str_random(36),
                'password' => app('hash')->make('yourpassword'),
                'firstName' => ('Madhan'),
                'lastName' => ('Madhan'),
                'middleName' => (''),
                'username' => ('Madhan'),
                'email' => ('Madhan@gmail.com'),
                'address' => ('B2'),
                'zipCode' => ('960'),
                'mobile' => ('786542'),
                'city' => ('Hulhule'),
                'state' => ('Henveru'),
                'country' => ('Maldives'),
                'isActive' => 1,
            ),
            2 =>
            array(
                'uid' => str_random(36),
                'password' => app('hash')->make('yourpassword'),
                'firstName' => ('Fathih'),
                'lastName' => ('Ibrahim'),
                'middleName' => (''),
                'username' => ('fathih'),
                'email' => ('fathih@gmail.com'),
                'address' => ('B2'),
                'zipCode' => ('960'),
                'mobile' => ('786542'),
                'city' => ('Hulhule'),
                'state' => ('Henveru'),
                'country' => ('Maldives'),
                'isActive' => 1,
            ),
            3 =>
            array(
                'uid' => str_random(36),
                'password' => app('hash')->make('yourpassword'),
                'firstName' => ('Niyaz'),
                'lastName' => ('Abdualla'),
                'middleName' => (''),
                'username' => ('niyaz'),
                'email' => ('niyaz@gmail.com'),
                'address' => ('B2'),
                'zipCode' => ('960'),
                'mobile' => ('786542'),
                'city' => ('Hulhule'),
                'state' => ('Henveru'),
                'country' => ('Maldives'),
                'isActive' => 1,
            ),
            
        ));
    }

}
