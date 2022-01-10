<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site\{
    HomeController
};
use Illuminate\Support\Facades\Auth;

Route::get('site/', [HomeController::class, 'index'])->name('site.index');

// newsletter
Route::get('/', [HomeController::class, 'newsletter'])->name('site.newsletter');
Route::get('send/', [HomeController::class, 'send'])->name('site.send');

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
    Route::put('product/update/{id}', 'Admin\ProductController@update')->name('product.update');
    Route::get('product/delete/{id}', 'Admin\ProductController@destroy')->name('product.delete');
    Route::get('product/relatorios/', 'Admin\ProductController@report')->name('product.report');
    Route::get('product/search/', 'Admin\ProductController@search')->name('product.search');

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
