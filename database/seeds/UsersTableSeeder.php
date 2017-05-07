<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Sudipto Chowdhury',
                'email' => 'dip.chy93@gmail.com',
                'password' => bcrypt('secret')
            ],

            [
                'name' => 'Rafsan Jani',
                'email' => 'rafsanjani@gmail.com',
                'password' => bcrypt('secret')
            ],

            [
                'name' => 'Xaber Ahmed',
                'email' => 'xaberahmed@gmail.com',
                'password' => bcrypt('secret')
            ],

           [
                'name' => 'Mohsin Ahmed',
                'email' => 'mohsinahmed@gmail.com',
                'password' => bcrypt('secret')
            ],

            [
                'name' => 'Tajul Islam Jony',
                'email' => 'tajuljony@gmail.com',
                'password' => bcrypt('secret')
            ]
            
        ];

        foreach($data as $data)
        {
            User::forceCreate($data);
        }
    }
}
