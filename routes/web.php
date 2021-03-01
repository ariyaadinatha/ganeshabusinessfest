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


Route::get('/', function() {return redirect()->to("/landing");});
Route::get('/home', function() {return redirect()->to("/landing");});


Route::get('/landing', 'PageRequestController@viewLanding');
Route::get('/about', 'PageRequestController@viewAbout');

// Event
Route::get('/event/awarding', 'PageRequestController@viewAwarding');
Route::get('/event/exhibition', 'PageRequestController@viewExhibition');
Route::get('/event/preevent', 'PageRequestController@viewPreevent');

// BCC
Route::get('/bcc/shs', 'PageRequestController@viewShs');
Route::get('/bcc/undergraduate', 'PageRequestController@viewUndergraduate');
Route::get('/bcc/bootcamp', 'PageRequestController@viewBootcamp');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
