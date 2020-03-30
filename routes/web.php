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

// Route::prefix('p')->name('profiles.')->group(function(){
// 	Route::get('{user}', 'ProfilesController@show')->name('show');
// });
<<<<<<< HEAD
Route::resource('profiles', 'ProfilesController');
=======

Route::resource('profile', 'ProfilesController')->except(['index', 'destroy']);
>>>>>>> d17573bd8c2e0860f86a725ca57f6bbfe55ade10

Route::get('upload', function(){
	return view('upload');
});

Route::post('upload/create', function(Request $req){
	$file = $req->file("file"); //get the file from POST request
	$adapter = Storage::cloud(); //prepare Google Drive connection
	$filename = $file->store(); //save the file to Google Drive
	//Search for the file on Google Drive using the filename
	$path = collect($adapter->listContents())->where('name', $filename)->first()['path'];
	//If found, get the URL then save to database
<<<<<<< HEAD
	$url = $adapter->getUrl($path);
=======
	$url = $adapter->url($path);
>>>>>>> d17573bd8c2e0860f86a725ca57f6bbfe55ade10
	dd($url);
})->name('photos.create');

//Socialite Experiment
Route::get('login/{provider}', 'SocialController@redirect');
Route::get('login/twitter/callback', 'SocialController@TwitterCallback');
Route::get('login/{provider}/callback','SocialController@Callback');

//React Experiment
// Route::post('formSubmit','PostController@formSubmit');
