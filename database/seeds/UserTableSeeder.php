<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use \App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
    		'name' => "James Carlo Luchavez",
    		'email' => "jluchavez@umindanao.edu.ph",
    		'username' => "luchmewep",
            'password' => Hash::make("jluchavez"),
    	]);

    	User::create([
    		'name' => "Renz Arriola",
    		'email' => "rarriola@umindanao.edu.ph",
    		'username' => "rarriola",
            'password' => Hash::make("rarriola"),
    	]);

    	User::create([
    		'name' => "Dee Sanchez",
    		'email' => "dsanchez@umindanao.edu.ph",
    		'username' => "dsanchez",
            'password' => Hash::make("dsanchez"),
    	]);
    }
}
