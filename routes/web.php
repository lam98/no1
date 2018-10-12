<?php

use Illuminate\Contracts\Auth\Guard;

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

App::setLocale('fa');

//for testing
Route::get('/', 'PagesController@index')->name('index');
Route::get('/cart', 'CartsController@showCart')->name('show.cart');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Route::post('/post', 'PostController@add')->name('post.submit');

Route::group(['prefix' => 'admin'], function () {
    Route::namespace('Admin')->group(function () {

        Route::get('/login', 'AdminLoginController@loginForm')->name('admin.login.form');
        Route::post('/login', 'AdminLoginController@login')->name('admin.login');
        Route::get('/logout', 'AdminLoginController@logout')->name('admin.logout');
        Route::get('/', 'AdminsController@dashboard')->name('admin.dashboard');
    });

    Route::post('/add-product', 'ProductsController@addProductSubmit')->name('add.product.submit');

    Route::get('/add-product', 'ProductsController@addProduct')->name('add.product');
    Route::get('/show-product', 'ProductsController@adminShowProduct')->name('admin.show.product');
    Route::get('/update-product/{id}', 'ProductsController@adminShowProductID')->name('admin.show.product.update');
    Route::post('/update-product/{id}', 'ProductsController@productUpdate')->name('update.product');
    Route::get('/edit-special-product/{id}', 'SpecialProductsController@showSpecialProductID')->name('special.product.id');
    Route::post('/edit-special-product/{id}', 'SpecialProductsController@editSpecialProduct')->name('edit.special.product');
    Route::post('/remove-product', 'ProductsController@removeProduct')->name('remove.product');
    Route::post('/remove-special-product', 'SpecialProductsController@removeSpecialProduct')->name('remove.special.product');
    Route::get('/special-product', 'SpecialProductsController@specialProduct')->name('special.product');
    Route::post('/special-product', 'SpecialProductsController@specialProductSubmit')->name('special.product.submit');
    Route::get('/comments', 'CommentsController@showComments')->name('show.comments');
    Route::post('/comments-publish', 'CommentsController@publishComment')->name('publish.comment');
    Route::get('/comments-details/{id}', 'CommentsController@showCommentDetail')->name('comment.details');
    Route::post('/comments-details', 'CommentsController@publishCommentProduct')->name('publish.comment.details');
    Route::get('/show-store','ProductsController@showStore')->name('show.store');
    Route::get('/show-store-details/{id}','ProductsController@showStoreDetails')->name('show.store.details');
    Route::post('/store-update/{id}','ProductsController@storeUpdate')->name('store.update');


});

Route::group(['prefix' => 'product'], function () {

    Route::get('/', 'ProductsController@showProductsDetails')->name('show.productss.details');

    Route::group(['prefix' => '/{id}'], function () {
        Route::get('/', 'ProductsController@showProductsDetails')->name('show.products.details');
        Route::post('/comment', 'CommentsController@newComment')->name('new.comment');
        Route::post('/addToCart', 'CartsController@addToCart')->name('add.to.cart');
        Route::get('/removeFromCart', 'CartsController@removeFromCart')->name('remove.from.cart');
        Route::get('/increaseQty', 'CartsController@increaseQty')->name('increase.qty');
        Route::get('/decreaseQty', 'CartsController@decreaseQty')->name('decrease.qty');
        // Route::get('/comment', 'ProductsController@getComment');
    });
});

Route::get('/amir', function () {

    return view('layouts/Product_media');
});

Route::get('/mahsa',function (){

    return view('layouts/userprofile');
});
Route::get('/facture',function (){

    return view('layouts/facture');
});