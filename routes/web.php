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

use App\Match;
use App\Prediction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', function (Request $request) {


    $matches = Match::all();

    $userId = Auth::id();
    $predictions = Prediction::where('user_id', $userId)->get();
    $matchesArray = array();

    $currentDate = Carbon::now();
    $currentMonday = Carbon::now();
    $currentMonday->modify('next monday');

    $matches = Match::whereBetween('date_play', [$currentDate, $currentMonday])->get();

    foreach($matches as $match) {
        if (!$predictions->contains('match_id', $match->id) && $match->date_play >= $currentDate) {
            $matchesArray[] = $match;
        }
    }

    return view('index', compact('matchesArray'));
});

Auth::routes(['verify' => true]);

Route::get('/user', 'UserController@index')->name('user.index');
Route::get('/user/{user}/edit', 'UserController@edit')->name('user.edit');
Route::post('/user/{user}', 'UserController@update')->name('user.update');
Route::get('/user/{user}/predictions', 'UserController@predictions')->name('user.predictions');
Route::get('/user/rang-list', 'UserController@rangList')->name('user.rang-list');
Route::get('/user/tip-group-list', 'UserController@tipGroupList')->name('user.tip-group-list');
Route::get('/user/tip-group-user-list', 'UserController@tipGroupUserList')->name('user.tip-group-user-list');
Route::get('/user/tip-group/{id}', 'UserController@tipGroupUsers');

Route::view('/sponsors', 'static.sponsors');
Route::view('/preise', 'static.preise');
Route::view('/monatspreise', 'static.monatspreise');

Route::get('/tip-group', 'TipGroupController@index')->name('tip-group.index');
Route::patch('/tip-group/{id}', 'TipGroupController@update')->name('tip-group.update');

Route::get('/prediction/spy5k2YgeWYBY46X', 'PredictionController@fetch_data');
Route::resource('/prediction', 'PredictionController');

Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact', 'ContactController@sendEmail')->name('contact.sendEmail');

Route::group(['middleware' => 'admin'], function() {
    Route::resource('/adding-match', 'AddingMatchController');
    Route::resource('/match', 'MatchController');
    Route::get('/users/import-csv', 'ImportCSVController@index')->name('users.import-csv');
    Route::post('/users/import-csv', 'ImportCSVController@storeMatch')->name('users.import-csv-store');
});

