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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/user', 'UserController@index')->name('user.index');
Route::get('/user/{user}/edit', 'UserController@edit')->name('user.edit');
Route::post('/user/{user}', 'UserController@update')->name('user.update');
Route::get('/user/{user}/predictions', 'UserController@predictions')->name('user.predictions');
Route::get('/user/rang-list', 'UserController@rangList')->name('user.rang-list');
Route::get('/user/tip-group-list', 'UserController@tipGroupList')->name('user.tip-group-list');
Route::get('/user/tip-group-user-list', 'UserController@tipGroupUserList')->name('user.tip-group-user-list');
Route::get('/user/tip-group/{id}', 'UserController@tipGroupUsers');

Route::get('/tip-group', 'TipGroupController@index')->name('tip-group.index');
Route::patch('/tip-group/{id}', 'TipGroupController@update')->name('tip-group.update');

Route::get('/prediction/spy5k2YgeWYBY46X', 'PredictionController@fetch_data');
Route::resource('/prediction', 'PredictionController');

Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact', 'ContactController@sendEmail')->name('contact.sendEmail');

Route::get('/users/import-csv', 'ImportCSVController@index')->name('users.import-csv');
Route::post('/users/import-csv', 'ImportCSVController@store')->name('users.import-csv-store');

Route::group(['middleware' => 'admin'], function() {
    Route::resource('/adding-match', 'AddingMatchController');
    Route::resource('/match', 'MatchController');

});

