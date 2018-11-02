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
        // $this->call(UsersTableSeeder::class);
        factory(\App\Category::class, 50)->create();
        factory(\App\Tag::class, 50)->create();

        //factory(\App\Post::class, 20)->create();
        factory(App\Post::class, 50)->create()->each(function (App\Post $post) {
            //se relaciona un post con un tag
            $post->tags()->attach([
                rand(1, 17), //el primer post se relaciona con las primeras cinco etiquetas
                rand(17, 36),
                rand(36, 50),
            ]);
        });

    }
}
