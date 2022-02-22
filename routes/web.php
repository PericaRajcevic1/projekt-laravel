<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\DashboardController;
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

Route::get('/contact', 'App\Http\Controllers\PagesController@index');


Route::get('pages/profiles', 'ProfilesController@show');




Route::get('contact', 'PagesController@showContactForm')->name('contact.show');
Route::post('contact', 'PagesController@submitContactForm')->name('contact.submit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard','Admin\FrontendController@index');
    

    Route::get('users',[DashboardController::class,'users']);
    Route::get('view-users/{id}',[DashboardController::class,'viewuser']);

});



