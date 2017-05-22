<?php

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentTableSeeder extends Seeder
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
                'id' => '1302020002',
                'name' => 'Mohsin Ahmed',
                'birthday' => '1993-04-22'             
            ],

             [
                'id' => '1301020020',
                'name' => 'Tajul Islam Jony',
                'birthday' => '1994-12-25'             
            ],

             [
                'id' => '1301020015',
                'name' => 'Jaber Ahmed',
                'birthday' => '1992-02-02'             
            ],

             [
                'id' => '1301020023',
                'name' => 'Sudipto Chowdhury',
                'birthday' => '1994-10-22'             
            ]
            
        ];

        foreach($data as $data)
        {
            Student::forceCreate($data);
        }
    }
}
