<?php
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/',function() {
    return view('pages.dashboard');

})->name('home');
*/
Route::get('/','ReportController@Dashboard')->name('home');
Route::get('report','ReportController@index');
