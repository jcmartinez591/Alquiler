<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

//    Route::get('rent', 'CarsController@index')->name("cars.index");
Route::get('/home', 'HomeController@show')->name('home');
Route::view('/perfil', 'perfil');
Route::get('/', ['as' => 'public', 'uses' => 'HomeController@show']);
Route::resource('rentals', 'RentalController');
Route::get('rentals/vehicles/{id}', 'RentalController@rent')->name('rentals.vehicles.rent');
Route::POST('rentals/vehicles/{return_date}', 'RentalController@store')->name('rentals.vehicles.store');
Route::get('logout', 'Auth\LoginController@logout');
Route::get('out', 'Auth\LoginController@logout');

