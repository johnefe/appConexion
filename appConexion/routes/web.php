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
Route::resource('/admin/make','MakeController');


/*content_video*/
Route::get('/admin/contentVideo','contentVideoController@index')->name('contentVideo');
/*promotions*/
Route::get('/admin/promotions/newPromotion','PromotionsController@newPromotion')->name('newPromotion');
Route::get('/admin/promotions/listPromotion','PromotionsController@listPromotion')->name('listPromotion');

/*messages*/
Route::get('/admin/messages','MessagesController@index')->name('messages');

/*suscription*/
Route::get('/admin/suscription','SuscriptionController@index')->name('suscription');
/*informatin*/
Route::get('/admin/information','InformationController@index')->name('information');