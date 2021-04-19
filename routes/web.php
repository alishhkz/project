<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Project;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SendEmailController;
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


Route::get('/project', 'App\Http\Controllers\ProjectController@index');

Route::post('addimage', 'App\Http\Controllers\ProjectController@store')->name('addimage');


Route::get('project/{locale}', function($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/email', 'App\Http\Controllers\SendEmailController@create');
Route::post('/email/send', 'App\Http\Controllers\SendEmailController@sendEmail')->name('send.email');

Route::get('/send', function () {
    return view('email');
})->name('send');

