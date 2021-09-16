<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) 
    {
        for($i = 0; $i < 50; $i++) {
            $post = new Post();
            $post->author = $faker->words(2,true);
            $post->location = $faker->word(2);
            $post->textpost = $faker->paragraph(5);
            $post->image = $faker->imageUrl(300,300, 'landscapes', true);
            $post->save();
        }
    }
}
