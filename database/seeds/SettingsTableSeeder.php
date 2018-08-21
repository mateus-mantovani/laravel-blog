<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
        	'site_name' => 'My Blog',
	        'contact_number' => '(16)9999-8888',
	        'contact_email' => 'email@email.com',
	        'address' => 'Address'
        ]);
    }
}
