<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name'  => 'Mateus Mantovani',
            'email' => 'admin@admin.com',
            'password'  => bcrypt('1234'),
	        'admin'     => 1
        ]);

        App\Profile::create([
        	'user_id'   => $user->id,
	        'about'     => 'This is about the user.',
	        'facebook'  => 'facebook.com',
	        'youtube'   => 'youtube.com',
	        'avatar'    => 'uploads/avatars/avatar1.png'
        ]);
    }
}
