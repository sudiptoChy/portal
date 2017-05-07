<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
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
                'name' => 'Computer Engineering'             
            ],

            [
                'name' => 'Electrical Engineering'
            ],

            [
                'name' => 'Architecture'
            ],

            [
                'name' => 'Civil Engineering'
            ],
            
            [
            	'name' => 'Law'
            ],

            [
            	'name' => 'Business'
            ],

            [
            	'name' => 'English'
            ]
            
        ];

        foreach($data as $data)
        {
            Category::forceCreate($data);
        }
    }
}
