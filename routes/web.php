<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

Route::get('site/', 'Site\HomeController@index')->name('site.index');
Route::get('departamento/{slug}', 'Site\HomeController@department')->name('site.department');
Route::get('sobre/', 'Site\HomeController@about')->name('site.about');
Route::get('politica-de-privacidade/', 'Site\HomeController@privacy')->name('site.privacy');
Route::get('produto/{slug}', 'Site\HomeController@product_details')->name('site.product-details');

//add item cart
Route::get('add/product/cart/{product_id}', 'Site\OrderController@addItem')->name('add.product.cart');
Route::get('delete/product/cart/{product_id}', 'Site\OrderController@deleteItem')->name('delete.product.cart');
Route::get('checkout/', 'Site\OrderController@checkout')->name('checkout');
Route::get('checkout/{product_id}/', 'Site\OrderController@checkoutFirst')->name('checkout.first');

// newsletter
Route::get('/', 'Site\HomeController@newsletter')->name('site.newsletter');
Route::get('send/', 'Site\HomeController@send')->name('site.send');

//administrativo
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('admin.index');

    // slider
    Route::get('slider/', 'Admin\SliderController@index')->name('slider.index');
    Route::get('slider/create/', 'Admin\SliderController@create')->name('slider.create');
    Route::post('slider/store/', 'Admin\SliderController@store')->name('slider.store');
    Route::get('slider/edit/{id}/', 'Admin\SliderController@edit')->name('slider.edit');
    Route::post('slider/update/{id}', 'Admin\SliderController@update')->name('slider.update');
    Route::get('slider/delete/{id}', 'Admin\SliderController@destroy')->name('slider.delete');

    //products
    Route::get('products/', 'Admin\ProductController@index')->name('product.index');
    Route::get('product/create/', 'Admin\ProductController@create')->name('product.create');
    Route::post('product/store/', 'Admin\ProductController@store')->name('product.store');
    Route::get('product/edit/{id}/', 'Admin\ProductController@edit')->name('product.edit');
    Route::post('product/update/{id}', 'Admin\ProductController@update')->name('product.update');
    Route::get('product/delete/{id}', 'Admin\ProductController@destroy')->name('product.delete');
    Route::get('product/relatorios/', 'Admin\ProductController@report')->name('product.report');
    Route::get('product/search/', 'Admin\ProductController@search')->name('product.search');

    //products
    Route::get('galery/{product_id}', 'Admin\GaleryController@index')->name('product.galery.index');
    Route::get('galery/create/', 'Admin\GaleryController@create')->name('product.galery.create');
    Route::post('galery/store/', 'Admin\GaleryController@store')->name('product.galery.store');
    Route::get('galery/delete/{id}', 'Admin\GaleryController@destroy')->name('product.galery.delete');

    // departments
    Route::get('departments/', 'Admin\DepartmentController@index')->name('department.index');
    Route::get('department/create/', 'Admin\DepartmentController@create')->name('department.create');
    Route::post('department/store/', 'Admin\DepartmentController@store')->name('department.store');
    Route::get('department/edit/{id}/', 'Admin\DepartmentController@edit')->name('department.edit');
    Route::post('department/update/{id}', 'Admin\DepartmentController@update')->name('department.update');
    Route::get('department/delete/{id}', 'Admin\DepartmentController@destroy')->name('department.delete');
    Route::get('department/relatorios/', 'Admin\DepartmentController@report')->name('department.report');
    Route::get('department/search/', 'Admin\DepartmentController@search')->name('department.search');

    // pedidos
    Route::get('orders/', 'Admin\OrderController@index')->name('order.index');
    Route::get('order/create/', 'Admin\OrderController@create')->name('order.create');
    Route::post('order/store/', 'Admin\OrderController@store')->name('order.store');
    Route::get('order/edit/{id}/', 'Admin\OrderController@edit')->name('order.edit');
    Route::post('order/update/{id}', 'Admin\OrderController@update')->name('order.update');
    Route::get('order/delete/{id}', 'Admin\OrderController@destroy')->name('order.delete');
    Route::get('order/relatorios/', 'Admin\OrderController@report')->name('order.report');
    Route::get('order/search/', 'Admin\OrderController@search')->name('order.search');
});

Auth::routes();
