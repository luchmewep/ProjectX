<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

<<<<<<< HEAD
class ProfilesController extends Controller
=======
class ProfilesController1 extends Controller
>>>>>>> d17573bd8c2e0860f86a725ca57f6bbfe55ade10
{
    public function show(User $user){
    	return view('profiles.show', compact('user'));
    }
}
