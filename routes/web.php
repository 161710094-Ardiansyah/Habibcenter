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

//ADMIN


Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],
function(){
Route::get('/','AdminController@index');
Route::resource('/biografi','BiografiController');
Route::resource('/tag','TagController');
Route::resource('/kategori','KategoriController');
Route::resource('/content','ContentController');
Route::resource('/artikel','ArtikelController');
Route::resource('/listhome','ListHomeController');
Route::resource('/youtube','YoutubeController');
});

//FRONTEND
Route::get('/home',function(){
	return redirect('admin');
});
Route::get('/','FrontendController@index');
Route::get('profil','FrontendController@biografi');
Route::get('mediarelease','FrontendController@mediarelease');

Route::get('/artikel', 'FrontendController@artikel')->name('artikel');
Route::get('/filter/tag/{id}','FrontendController@filterTag');
Route::get('/artikel/kategori/{kategori}','FrontendController@filterKategori');
Route::get('/filter/kategori/{kategori}','FrontendController@filterKategori');
Route::get('artikel/show/{artikel}', 'FrontendController@singleblog');
Route::get('/page','FrontendController@artikel');
Route::get('/page{id}','FrontendController@show')->name('page');
