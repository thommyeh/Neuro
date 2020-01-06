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
Auth::routes(['verify' => true]);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/', 'Controller@home')->name('home');
//Listes
Route::get('/articles', 'Controller@allArticles')->name('allArticles');
Route::get('/molecules', 'Controller@allMolecules')->name('allMolecules');
Route::get('lineaments', 'Controller@allLineaments')->name('allLineaments');
Route::get('/show_category/{key}', 'Controller@showCategory')->name('show_category');
//Articles
Route::get('/show_article/{id}', 'Controller@showArticle')->name('show_article');
Route::get('/show_molecule/{id}', 'Controller@showMolecule')->name('show_molecule');
Route::get('/show_lineament/{id}', 'Controller@showLineament')->name('show_lineament');
//Interaction
Route::post('/search', 'Controller@search')->name('search');
Route::post('/show_article/{id}', 'UserController@postComment')->name('post_comment');
//Utilisateur
Route::get('/profil', 'UserController@profil')->name('profil')->middleware('verified');
Route::post('/profil', 'UserController@edit')->name('edit')->middleware('verified');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


