<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/user_page', 'App\Http\Controllers\UserAccountController@index');

Route::get('/my_place', 'App\Http\Controllers\MyPlaceController@hello');

Route::group(['namespace' => 'App\Http\Controllers\Post', 'middleware' => 'admin'], function() {
    Route::get('/post', 'IndexController')->name('post.index');
    Route::get('/post/create', 'CreateController')->name('post.create');
    Route::post('/post', 'StoreController')->name('post.store');
    Route::get('/post/{post}', 'ShowController')->name('post.show');
    Route::get('/post/{post}/edit', 'EditController')->name('post.edit');
    Route::patch('/post/{post}', 'UpdateController')->name('post.update');
    Route::delete('/post/{post}', 'DestroyController')->name('post.delete');

});

//Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
//    Route::group(['namespace' => 'Post'], function() {
//        Route::get('/post', 'IndexController')->name('admin.post.index');
//    });
//});

Route::get('/post/update', 'App\Http\Controllers\PostController@update');
Route::get('/post/delete', 'App\Http\Controllers\PostController@delete');
Route::get('/post/first_or_create', 'App\Http\Controllers\PostController@firstOrCreate');
Route::get('/post/update_or_create', 'App\Http\Controllers\PostController@updateOrCreate');

Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
