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
		    'core_category' => 1
	    ]);

	    \App\Category::create([
		    'name' => 'Drupal',
		    'core_category' => 1
	    ]);

	    \App\Category::create([
		    'name' => 'Laravel',
		    'core_category' => 1
	    ]);

	    \App\Category::create([
		    'name' => 'PHP',
		    'core_category' => 1
	    ]);
    }
}
