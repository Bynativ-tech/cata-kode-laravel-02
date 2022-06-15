<?php

use App\Http\Controllers\Api\RdvController;
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
Route::match(['get', 'post'], '/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('home');
});

Route::get('/rdv', "RdvController@index");
Route::get('/rdv/create', "RdvController@create");
Route::get('/rdv/lastRdv', "RdvController@lastRdv");
Route::get('/rdv/created', "RdvController@rdvCreated");

Route::get('/rdv/{rdv}', "RdvController@show");

Route::post('/rdv', "RdvController@store");





//Route::get('/rdv/{}', "RdvController@listeRdv");

Route::get('/api', function () {
    return "api";
});
