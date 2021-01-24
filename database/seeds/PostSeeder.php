<?php

use Illuminate\Database\Seeder;
use App\BlogPost;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();

        for($i = 0; $i < 200; $i++){
            $post = new BlogPost();
            $post->title = $faker->text(20);
            $post->blog_post = $faker->text(200);
            $post->fullname = $faker->name(20);
            $post->email = $faker->email;
            // $post->image = $faker->image($dir = '/public/posts');
            $post->pub_date = $faker->dateTimeBetween('-10 years', '+ 5 years');
            $post->save();
        }
    }
}
