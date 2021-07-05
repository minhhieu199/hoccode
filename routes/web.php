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
Route::get('/', 'shopcontroller@index');
// Trang liên hệ
Route::get('/lien-he', 'ShopController@contact');
Route::post('/postContact', 'ShopController@postContact')->name('shop.postContact');
Route::get('/tin-tuc', 'ShopController@Article');



// Trang danh mục
Route::get('/danh-muc-san-pham/{id}', 'shopcontroller@listproduct');

//trang chi tiết
Route::get('chi-tiết/{id}', 'ShopController@productdetail');
///{id}

//trang giỏ hàng
Route::get('/gio-hang', 'CartController@Cart');

Route::group(['prefix' => 'admin','as' => 'admin.'/*, 'middleware' => 'checkLogin'*/], function() {
	Route::resource('category', 'categoryController');

  // QL Banner
	Route::resource('banner', 'BannerController');

// QL Vendor
	Route::resource('vendor', 'VendorController');

// QL Product
	Route::resource('product', 'ProductsController');
//QL USER
	Route::resource('user', 'UserController');

    Route::resource('setting', 'SettingController');

    // QL bài viết
    Route::resource('article', 'ArticleController');

});



Route::get('/admin/login', 'LoginController@index')->name('admin.login');
Route::post('/admin/postLogin', 'LoginController@postLogin')->name('admin.postLogin');

