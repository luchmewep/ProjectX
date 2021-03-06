<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');
Route::get('about-us', function () {
    return view('about-us');
})->name('about-us');
Route::get('profile', function () {
    return view('profile');
})->name('profile');
Route::get('mails', function () {
    return view('mails');
})->name('mails');
Route::get('history', function () {
    return view('history');
})->name('history');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('p/{user}', 'ProfilesController@show')->name('profiles.show');

Route::get('upload', function(){
	return view('upload');
});

Route::post('upload/create', function(Request $req){
	return dd($req->file("file")->store("", "google"));
})->name('photo.create');

//React Experiment
// Route::post('formSubmit','PostController@formSubmit');