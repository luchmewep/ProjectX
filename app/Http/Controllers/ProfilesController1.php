<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController1 extends Controller
{
    public function show(User $user){
    	return view('profiles.show', compact('user'));
    }
}
