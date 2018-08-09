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
        App\User::create([
            'name'  => 'Mateus Mantovani',
            'email' => 'mateus@codebit.com.br',
            'password'  => bcrypt('fdsafdsa')
        ]);
    }
}
