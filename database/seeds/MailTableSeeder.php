<?php

use Illuminate\Database\Seeder;
use \App\Mail;

class MailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mail::create([
    		'from_id' => "1",
    		'to_id' => "3",
    		'subject' => "First mail",
    		'content' => "This is the content of the mail.",
    	]);
    }
}
