<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Tag::create([
        	'name'  => 'PHP 7',
	        'core_tag' => 1
        ]);

	    \App\Tag::create([
		    'name'  => 'MySQL',
		    'core_tag' => 1
	    ]);

	    \App\Tag::create([
		    'name'  => 'SEO',
		    'core_tag' => 1
	    ]);

	    \App\Tag::create([
		    'name'  => 'Tutorial',
		    'core_tag' => 1
	    ]);
    }
}
