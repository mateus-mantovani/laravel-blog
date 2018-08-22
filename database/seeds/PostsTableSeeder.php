<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$title = 'Tutorial for Laravel';
        $post = \App\Post::create([
        	'title' => $title,
	        'slug'  => str_slug($title),
	        'content'   => 'This is the content.',
	        'category_id' => 3,
	        'featured'  => 'uploads/posts/1.png'
        ]);

	    $post->tags()->attach([1,4]);
	    $post->save();


	    $title = 'Tutorial for Drupal';
	    $post = \App\Post::create([
		    'title' => $title,
		    'slug'  => str_slug($title),
		    'content'   => 'This is the content.',
		    'category_id' => 2,
		    'featured'  => 'uploads/posts/2.png'
	    ]);

	    $post->tags()->attach([1,4]);
	    $post->save();


	    $title = 'PHP with MySQL';
	    $post = \App\Post::create([
		    'title' => $title,
		    'slug'  => str_slug($title),
		    'content'   => 'This is the content.',
		    'category_id' => 4,
		    'featured'  => 'uploads/posts/3.jpg'
	    ]);

	    $post->tags()->attach([1,4]);
	    $post->save();
    }
}