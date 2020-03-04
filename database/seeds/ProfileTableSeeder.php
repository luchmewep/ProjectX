<?php

use Illuminate\Database\Seeder;
use \App\Profile;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Profile::create([
    		'user_id' => "1",
    		'profession' => "Programmer",
    		'workplace' => "University of Mindanao",
    		'about' => "I am just a programmer who wants to make an impact.",
    		'url' => "m.me/luchmewep",
    	]);
    }
}
