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
Route::get('/','frontend_controller@index')->name('index.frontend');
Route::get('all/book','frontend_controller@product')->name('pages.book');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
//Create new category
Route::get('create/category','Category_controller@create')->name('category.create');
//store category
Route::post('store/category','Category_controller@store')->name('category.store');
//edit category
Route::get('all/categories','Category_controller@index')->name('category.index');
//edit category
Route::get('edit/category/{id}','Category_controller@edit')->name('category.edit');
//delete category
Route::get('delete/category/{id}','Category_controller@destroy')->name('category.delete');
//update category
Route::post('update/category/{id}','Category_controller@update')->name('category.update');
//product
Route::get('create/product','Product_controller@create')->name('product.create');
//store product
Route::post('store/product','Product_controller@store')->name('product.store');
//all product
Route::get('all/product','Product_controller@index')->name('product.index');
//edit product
Route::get('edit/product/{id}','Product_controller@edit')->name('product.edit');
//update product
Route::Post('edit/product/{id}','Product_controller@edit')->name('product.update');
//delete product
Route::get('destroy/product/{id}','Product_controller@destroy')->name('product.destroy');

///Gallary
//craete gallary
Route::get('create/gallary','Gallary_controller@create')->name('gallary.create');
//store gallary
Route::post('store/gallary','Gallary_controller@store')->name('gallary.store');
//show gallary
Route::get('all/gallary','Gallary_controller@index')->name('gallaries');
//edit gallary
Route::get('edit/gallary/{id}','Gallary_controller@edit')->name('gallary.edit');
//delete gallary
Route::get('destroy/gallary/{id}','Gallary_controller@destroy')->name('gallary.destroy');
//update gallary
Route::post('update/gallary/{id}','Gallary_controller@update')->name('gallary.update');




//author
//create new author
Route::get('create/author','Author_controller@create')->name('author.create');
//store author
Route::post('store/author','Author_controller@store')->name('author.store');
//all authors
Route::get('all/author','Author_controller@index')->name('author.index');
//edit author
Route::get('edit/author/{id}','Author_controller@edit')->name('author.edit');
//delete author
Route::get('destroy/author/{id}','Author_controller@destroy')->name('author.destroy');
//update authors
Route::post('update/author/{id}','Author_controller@update')->name('author.update');
//setting
Route::get('setting','Setting_controller@index')->name('setting');
//update setting
Route::post('update/setting','Setting_controller@update')->name('setting.update');
//user
//user profile
//add new user
Route::get('create/user','User_controller@create')->name('user.create');
//store users
Route::post('store/user/','User_controller@store')->name('user.store');
//to edit profile user
Route::get('/user/profile','Profile_controller@index')->name('user.profile');
//update user profile
Route::post('/user/profile/update','Profile_controller@update')->name('user.profile.update');
//delete user and profile
Route::get('user/delete/{id}','User_controller@destroy')->name('user.delete');
//show users
Route::get('show/users','User_controller@index')->name('users');
//make admin
Route::get('make/admin/{id}','User_controller@makeadmin')->name('user.admin');
//remove permession
Route::get('delete/permession/{id}','User_controller@notadmin')->name('user.not.admin');

});

