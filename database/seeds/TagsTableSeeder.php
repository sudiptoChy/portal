<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
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
                'name' => 'programming'             
            ],

            [
                'name' => 'technology'
            ],

            [
                'name' => 'circuit'
            ],

            [
                'name' => 'litereture'
            ],
            
            [
            	'name' => 'information'
            ],

            [
            	'name' => 'technology'
            ],

            [
            	'name' => 'course'
            ]
            
        ];

        foreach($data as $data)
        {
            Tag::forceCreate($data);
        }
    }
}
