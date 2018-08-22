<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    \App\Category::create([
		    'name' => 'Wordpress',
	    ]);

	    \App\Category::create([
		    'name' => 'Drupal',
	    ]);

	    \App\Category::create([
		    'name' => 'Laravel',
	    ]);

	    \App\Category::create([
		    'name' => 'PHP',
	    ]);
    }
}
