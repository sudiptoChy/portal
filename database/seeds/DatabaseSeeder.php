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
         $this->call(UsersTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(PostsTableSeeder::class);
         $this->call(TagsTableSeeder::class);
         $this->populatePostTagTable();
    }

    public function populatePostTagTable()
    {
    	DB::table('post_tag')->insert(
    		$data = [
	    		[
		            'post_id' => '1',
		            'tag_id' => '3',
	        	],
	        	[
		            'post_id' => '1',
		            'tag_id' => '4',
	        	],
	        	[
		            'post_id' => '2',
		            'tag_id' => '3',
	        	],
	        	[
		            'post_id' => '4',
		            'tag_id' => '5',
	        	],
	        	[
		            'post_id' => '4',
		            'tag_id' => '4',
	        	],
	        	[
		            'post_id' => '2',
		            'tag_id' => '4',
	        	]
    		]
        );
    }
}
