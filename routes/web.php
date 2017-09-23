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
Route::get('project/{pid}/module/insert','Module\Edit@insert');
Route::post('project/{pid}/module/insert','Module\Edit@handle_insert');

Route::get('project/{pid}/module/update/{mid}','Module\Edit@update');
Route::post('project/{pid}/module/update/{mid}','Module\Edit@handle_update');

Route::get('project/{pid}/module/delete/{mid}','Module\Edit@delete');
Route::post('project/{pid}/module/delete/{mid}','Module\Edit@handle_delete');

Route::get('project/{pid}/module/{mid}', 'Module\View@index');


// --- Plugin Routes
Route::get('project/{pid}/module/{mid}/plugin/insert','Plugin\Edit@insert');
Route::post('project/{pid}/module/{mid}/plugin/insert','Plugin\Edit@handle_insert');

Route::get('project/{pid}/module/{mid}/plugin/update/{lid}','Plugin\Edit@update');
Route::post('project/{pid}/module/{mid}/plugin/update/{lid}','Plugin\Edit@handle_update');

Route::get('project/{pid}/module/{mid}/plugin/delete/{lid}','Plugin\Edit@delete');
Route::post('project/{pid}/module/{mid}/plugin/delete/{lid}','Plugin\Edit@handle_delete');

Route::get('project/{pid}/module/{mid}/plugin/{lid}/editor','Plugin\Lib@editor');


// --- Ajax Routes
Route::post('ajax/plugin/moratab/save','Plugin\Moratab\Lib@save');

