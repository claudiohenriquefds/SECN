<?php

use Illuminate\Database\Seeder;
use App\User;

class AutoAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'root',
        	'email' => 'root@example.com',
        	'password' => bcrypt('SenhaAdmin568A568Bç'),
        ]);
    }
}
