<?php
use \App\Http\Middleware\Admin;
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
Route::get('/guest/handle', 'DataController@Handle')->name('handle');
Route::get('/guest/sensori/{site_id}', 'DataController@Sensori')->name('sensori');
Route::get('/guest/notuser', 'DataController@NoUser')->name('nouser');


//route utente root
//Route::get('/adminviews/gestione_sensori', 'AdminController@AutHandle')->name('authandle')->middleware('auth.admin');

Route::group(['middleware' => 'auth.admin'] ,function (){
		Route::group(['middleware' => 'StringGen'], function () {
			Route::group(['middleware' => 'Rilevazione'], function (){
Route::get('/adminviews/gestione_utenti', 'AdminController@UserHandle')->name('userhandle');
Route::get('/adminiews/admin_page', 'AdminController@AddUser')->name('adduser');
Route::get('/adminiews/accept/{user_id}', 'AdminController@Accept')->name('accept');

Route::get('/adminiews/gestione_siti/{user_id}', 'AdminController@SiteHandle')->name('sitehandle');
Route::get('/adminiews/addsite', 'AdminController@AddSite')->name('addsite');
Route::post('/adminiews/addnewsite', 'AdminController@AddSitePost')->name('addnewsite');
Route::get('/adminiews/removesite/{site_id}', 'AdminController@RemoveSite')->name('removesite');

Route::get('/adminiews/gestione_sensori/{site_id}', 'AdminController@SensoriHandle')->name('sensorihandle');
Route::get('/adminiews/addsensore/{site_id}', 'AdminController@AddSensore')->name('addsensore');
Route::post('/adminiews/addnewsensore', 'AdminController@AddNewSensore')->name('addnewsensore');
Route::get('/adminiews/detection/{sensore_id}', 'AdminController@Detection')->name('detection');
Route::get('/adminiews/removesensore/{sensore_id}', 'AdminController@RemoveSensore')->name('removesensore');

Route::get('/adminiews/editsensore/{sensore_id}/{site_id}', 'AdminController@EditSensore')->name('editsensore');
Route::post('/adminiews/edit', 'AdminController@Edit')->name('edit');


Route::post('/adminiews/search', 'AdminController@Search')->name('search');

});
	});
		});