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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'DataController@Handle')->name('home');
Route::get('/userviews/handle', 'DataController@Handle')->name('handle');
Route::get('/userviews/sito/{id}', 'DataController@Sito')->name('sito');



//route utente root
Route::get('/adminviews/gestione_sensori', 'AdminController@AutHandle')->name('authandle');
Route::get('/adminviews/gestione_utenti', 'AdminController@UserHandle')->name('userhandle');
Route::get('/adminiews/gestione_siti/{user_id}', 'AdminController@SiteHandle')->name('sitehandle');
Route::get('/adminiews/gestione_sensori/{site_id}', 'AdminController@SensoriHandle')->name('sensorihandle');
Route::get('/adminiews/admin_page', 'AdminController@AddUser')->name('adduser');
Route::get('/adminiews/accept/{user_id}', 'AdminController@Accept')->name('accept');
Route::get('/adminiews/addsite', 'AdminController@AddSite')->name('addsite');
Route::post('/adminiews/addnewsite', 'AdminController@AddSitePost')->name('addnewsite');
