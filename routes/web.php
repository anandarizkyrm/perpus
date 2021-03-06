<?php

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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');


//resource root
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {

//
    Route::resource('user', 'UserController');
    Route::resource('buku', 'BukuController');
    Route::get('cetak-user', 'UserController@print')->name('print.user');
    Route::get('cetak-buku', 'BukuController@print')->name('print.buku');


});
