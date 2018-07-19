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
//Route::get('/','InicioController@index');


Route::get('/users','UsersController@index')->name('users');
Route::get('/users/{id}','UsersController@getUser')->name('users');
Route::get('/medias','SocialMediaController@index')->name('medias');

Route::get('/trabajos/{id}', 'TrabajosController@getTrabajos')->name('trabajos');
Route::get('/detalle-trabajo/{id}', 'DetailWorkController@getDetail')->name('detalle');
Route::get('/promociones/{id}', 'PromocionesController@getPromocion')->name('detalle');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/login', 'HomeController@index')->name('login');
Route::get('/admin/information','InformationController@index')->name('information');


/*admin*/
Route::resource('admin/date','DateController');
Route::resource('admin/slider','SliderController');
Route::resource('admin/threeServices','threeServicesController');
Route::resource('admin/aboutUs','aboutUsController');
Route::resource('admin/networks','NetworksController');
Route::resource('admin/make','MakeController');
Route::resource('admin/maker','subMakerController');
Route::resource('admin/makes','MakesController');
Route::resource('admin/contentVideo','contentVideoController');
Route::resource('admin/promotions','PromotionsController');
Route::resource('/admin/messages','MessagesController');
Route::resource('/admin/suscription','SuscriptionController');
Route::resource('/','InicioController');
Route::resource('mensajes','InicioController');
Route::resource('news','NewsletterController');

/*exportar datos*/
	
//Route::get('export-users', 'ExcelEmailsController@exportEmails');
//Route::get('/export-users/{type}', 'ExcelEmailsController@exportEmails')->name('export.file');
//Route::get('downloadExcel/{type}', 'ExcelEmailsController@downloadExcel');
Route::get('/ex', function () {
    return \Excel::download(new App\Exports\EmailsExports, 'invoices.xlsx');
});



