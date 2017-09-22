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

// --- Welcome Page
Route::get('/', function () {
    return view('welcome');
});


// --- Authentication Routes
Auth::routes();


// --- Home Routes
Route::get('/home', 'HomeController@index')->name('home');


// --- Dashboard Routes
Route::get( "dashboard" , "Dashboard\View@index" );


// --- Project Routes
Route::get('project/insert','Project\Edit@insert');
Route::post('project/insert','Project\Edit@handle_insert');

Route::get('project/update/{id}','Project\Edit@update');
Route::post('project/update/{id}','Project\Edit@handle_update');

Route::get('project/delete/{id}','Project\Edit@delete');
Route::post('project/delete/{id}','Project\Edit@handle_delete');

Route::get('project/{id}','Project\View@index');


// --- Module Routes
Route::get('project/{pid}/module/{mid}', 'Module\View@index');
