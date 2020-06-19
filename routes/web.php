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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'index_controller@index')->name('landing-page');
Route::get('/shop', 'shop_controller@index')->name('shop.index');
Route::get('/shop/{product}', 'shop_controller@show')->name('shop.show');
Route::get('/shop/{name}', 'shop_controller@show_category')->name('shop.category');
Route::get('/search', 'shop_controller@search')->name('search');

// Route::get('/list', function () {
//     return view('list_product');
// });
Route::get('/detail', function () {
    return view('detail_product');
});

Route::get('/simple', 'catalogController@create');
Route::resource('admin','AdminController');
Route::resource('banner','BannerController');
Route::resource('homepage','HomepageController');
Route::resource('category','CategoryController');
//admin
Route::resource('admin','AdminController');
Route::get('/login', 'AdminController@login');
Route::post('/loginPost', 'AdminController@loginPost')->name('login-post');
Route::get('/logout', 'AdminController@logout');
Route::get('admin', ['uses' => 'AdminController@index', 'as' => 'admin.dashboard']);
Route::get('admin/katalog/dataProduk', 'AdminController@dataProduk')->name('admin-dataProduk');
Route::get('admin/katalog/dataKategori', ['uses' => 'AdminController@dataKategori','as' => 'admin-dataKategori']);
Route::get('admin/katalog/produkBaru', ['uses' => 'AdminController@produkBaru','as' => 'admin.produkBaru']);
Route::get('admin/katalog/editProduk/{id}', 'AdminController@edit')->name('admin-editProduk');
Route::get('admin/webSetting/homepage','AdminController@webSetting')->name('web.setting');
Route::get('admin/webSetting/banner','BannerController@index')->name('banner');
Route::get('admin/webSetting/preview','PreviewController@index')->name('preview');
Route::get('admin/katalog/editKategori/{id}', 'CategoryController@edit')->name('admin-editKategori');
