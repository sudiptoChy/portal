<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
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
                'title' => 'Neque porro quisquam est qui dolorem ipsum quia dolor',
                'slug' => 'neque-porro-quisquam',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et lorem vel leo elementum dignissim eu vel ligula. Nulla mattis ac libero a laoreet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus eleifend risus dolor, at blandit nisi placerat id. Curabitur rutrum tellus sit amet leo accumsan porta. Fusce porta lorem ante, vel vehicula quam cursus eget. Suspendisse eleifend pretium purus, gravida dapibus dui pellentesque blandit. Phasellus pulvinar maximus est vitae pharetra. Nullam consectetur elit sit amet quam malesuada, id faucibus velit sagittis. Duis et diam imperdiet, dignissim ipsum eu, congue dui. Nulla ut dapibus felis. Aenean rutrum, diam in imperdiet bibendum, nisi metus porttitor lectus, at sagittis enim ante eget neque. Pellentesque sodales mauris non enim tempus malesuada. Nam tincidunt dui elit, at tempor mi cursus ac.

Quisque sit amet lacus vitae erat finibus dictum. Suspendisse potenti. Suspendisse in odio eu orci varius venenatis in eget elit. Etiam imperdiet ante dolor, at iaculis ex dignissim ut. Aliquam quis ipsum libero. Aliquam porta dapibus dolor, vitae hendrerit urna rutrum vel. Maecenas pharetra condimentum libero nec elementum. Nunc nisi nisl, sodales in ex finibus, molestie scelerisque lacus. Suspendisse semper eget sapien eget ultrices. Quisque quis consectetur ex, eget fermentum lacus.',
                

                'rating' => '3.4',
                'user_id' => '1',
                'category_id' => '1'
            ],

            [
                'title' => 'In hac habitasse platea dictumst. Lorem ipsum dolor sit amet',
                'slug' => 'in-hac-habitasse',
                'body' => 'consectetur adipiscing elit. Quisque sagittis ultrices ipsum, vitae molestie est facilisis at. Proin congue nunc sed rhoncus malesuada. Fusce orci urna, commodo sed enim vitae, consequat tincidunt urna. Morbi malesuada purus sit amet dolor lobortis dictum. Cras non congue purus, varius porta ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc quam ante, convallis eu enim sed, rhoncus imperdiet magna. Phasellus mattis finibus lobortis.

Maecenas eros eros, feugiat sit amet justo at, interdum tempor risus. Praesent et malesuada nisl. Fusce a sem at arcu mollis pellentesque. Aenean vitae vestibulum eros. Etiam vulputate nulla id posuere dignissim. Donec velit ipsum, tincidunt sit amet ullamcorper quis, bibendum at velit. Maecenas sit amet diam et tortor posuere varius. Integer ipsum leo, tempor sed condimentum ut, semper sed leo. Donec in nunc libero. Aenean malesuada, libero quis auctor tincidunt, nulla mauris semper lacus, at condimentum quam nisi ac urna. Suspendisse ullamcorper, nisi quis tempus posuere, justo ligula consectetur nunc, vel iaculis nunc orci eu lorem. Sed tempus tortor a lorem bibendum, quis lobortis nulla molestie. Etiam et quam egestas, aliquam massa eu, finibus eros.',

                'rating' => '3.9',
                'user_id' => '2',
                'category_id' => '2'
            ],

            [
                'title' => 'Nam elementum eget dolor id rutrum',
                'slug' => 'Nam-elementum-eget',
                'body' => 'In massa ligula, sodales a magna a, dictum egestas augue. Proin non felis lacinia, sodales arcu dignissim, ullamcorper erat. Cras odio diam, condimentum eget ullamcorper nec, semper sit amet elit. Aliquam arcu arcu, sodales eu lacus non, tincidunt tristique tortor. Suspendisse et sapien dapibus, pulvinar est at, efficitur massa. Pellentesque congue aliquet diam sit amet iaculis. Morbi sed ex ac nisi ullamcorper tincidunt. Vestibulum consectetur lobortis odio ac sodales.

In egestas mattis arcu id cursus. Duis nec lacinia urna, sed lacinia nisi. Curabitur id mauris quis urna malesuada consequat sit amet et lacus. Phasellus dictum ullamcorper sagittis. Sed venenatis fermentum nisi, ac porttitor urna. Nam sagittis felis sed maximus sagittis. Proin consectetur est non sapien tempus volutpat. Praesent facilisis eu eros vel feugiat. Praesent suscipit rutrum tellus a iaculis. Vivamus sed pretium enim, quis sagittis tellus.',

                'rating' => '4.3',
                'user_id' => '3',
                'category_id' => '4'
            ],

           [
                'title' => 'Neque porro quisquam est qui dolorem ipsum quia dolor',
                'slug' => 'neque-porro-quisquam',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et lorem vel leo elementum dignissim eu vel ligula. Nulla mattis ac libero a laoreet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus eleifend risus dolor, at blandit nisi placerat id. Curabitur rutrum tellus sit amet leo accumsan porta. Fusce porta lorem ante, vel vehicula quam cursus eget. Suspendisse eleifend pretium purus, gravida dapibus dui pellentesque blandit. Phasellus pulvinar maximus est vitae pharetra. Nullam consectetur elit sit amet quam malesuada, id faucibus velit sagittis. Duis et diam imperdiet, dignissim ipsum eu, congue dui. Nulla ut dapibus felis. Aenean rutrum, diam in imperdiet bibendum, nisi metus porttitor lectus, at sagittis enim ante eget neque. Pellentesque sodales mauris non enim tempus malesuada. Nam tincidunt dui elit, at tempor mi cursus ac.

Quisque sit amet lacus vitae erat finibus dictum. Suspendisse potenti. Suspendisse in odio eu orci varius venenatis in eget elit. Etiam imperdiet ante dolor, at iaculis ex dignissim ut. Aliquam quis ipsum libero. Aliquam porta dapibus dolor, vitae hendrerit urna rutrum vel. Maecenas pharetra condimentum libero nec elementum. Nunc nisi nisl, sodales in ex finibus, molestie scelerisque lacus. Suspendisse semper eget sapien eget ultrices. Quisque quis consectetur ex, eget fermentum lacus.',

                'rating' => '4.7',
                'user_id' => '4',
                'category_id' => '3'
            ],

            [
                'title' => 'Vestibulum et mi in lorem pulvinar posuere id a nis',
                'slug' => 'vestibulum-et-mi',
                'body' => 'Cras odio diam, condimentum eget ullamcorper nec, semper sit amet elit. Aliquam arcu arcu, sodales eu lacus non, tincidunt tristique tortor. Suspendisse et sapien dapibus, pulvinar est at, efficitur massa. Pellentesque congue aliquet diam sit amet iaculis. Morbi sed ex ac nisi ullamcorper tincidunt. Vestibulum consectetur lobortis odio ac sodales.

In egestas mattis arcu id cursus. Duis nec lacinia urna, sed lacinia nisi. Curabitur id mauris quis urna malesuada consequat sit amet et lacus. Phasellus dictum ullamcorper sagittis. Sed venenatis fermentum nisi, ac porttitor urna. Nam sagittis felis sed maximus sagittis. Proin consectetur est non sapien tempus volutpat. Praesent facilisis eu eros vel feugiat. Praesent suscipit rutrum tellus a iaculis. Vivamus sed pretium enim, quis sagittis tellus',

                'rating' => '2.4',
                'user_id' => '3',
                'category_id' => '4'
            ]
            
        ];

        foreach($data as $data)
        {
            Post::forceCreate($data);
        }
    }
}
