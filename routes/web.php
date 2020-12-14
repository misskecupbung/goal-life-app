<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'BerandaController@welcome');

Route::get('/about', 'BerandaController@about');

Route::get('/help', 'BerandaController@help');
Route::get('/goals', 'GoalController@index');

Route::get('/goals/create', 'GoalController@create');
Route::post('/goals', 'GoalController@store');
Route::get('goals/{goal}/edit', 'GoalController@edit');
Route::put('goals/{goal}', 'GoalController@update');
Route::get('/goals/{goal}/delete', 'GoalController@delete');
