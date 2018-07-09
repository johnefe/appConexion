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

//Route::get('/', function () {
 //   return view('inicio');
//});
Route::get('/','InicioController@index');


Route::get('/users','UsersController@index')->name('users');
Route::get('/users/{id}','UsersController@getUser')->name('users');
Route::get('/medias','SocialMediaController@index')->name('medias');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/*admin*/
Route::resource('admin/slider','SliderController');
Route::resource('admin/threeServices','threeServicesController');
Route::resource('admin/aboutUs','aboutUsController');
Route::resource('admin/networks','NetworksController');
Route::resource('admin/make','MakeController');
Route::resource('admin/contentVideo','contentVideoController');
Route::resource('admin/promotions','PromotionsController');
Route::resource('/admin/messages','MessagesController');
Route::resource('/admin/suscription','SuscriptionController');
/*informatin*/
Route::get('/admin/information','InformationController@index')->name('information');