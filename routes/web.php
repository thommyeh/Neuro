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

Route::get('/', 'Controller@home')->name('home');
Route::get('/articles', 'Controller@allArticles')->name('allArticles');
Route::get('/molecules', 'Controller@allMolecules')->name('allMolecules');
Route::get('lineaments', 'Controller@allLineaments')->name('allLineaments');
Route::get('/show_article/{id}', 'Controller@showArticle')->name('show_article');
Route::post('/show_article/{id}', 'Controller@postComment')->name('post_comment');
Route::get('/show_molecule/{id}', 'Controller@showMolecule')->name('show_molecule');
Route::get('/show_lineament/{id}', 'Controller@showLineament')->name('show_lineament');
Route::get('/show_category/{key}', 'Controller@showCategory')->name('show_category');
Route::post('/search', 'Controller@search')->name('search');
Route::get('/profil', 'HomeController@profil')->name('profil')->middleware('verified');
Route::post('/profil', 'HomeController@edit')->name('edit')->middleware('verified');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Auth::routes(['verify' => true]);






Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
