<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Project;
use App\Http\Controllers\ProjectController;
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

Route::get('lang/{locale}', function ($locale){
    session()->put('locale', $locale);
    return redirect()->back();
});