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
        	'name'  => 'PHP 7'
        ]);

	    \App\Tag::create([
		    'name'  => 'MySQL'
	    ]);

	    \App\Tag::create([
		    'name'  => 'SEO'
	    ]);

	    \App\Tag::create([
		    'name'  => 'Tutorial'
	    ]);
    }
}
