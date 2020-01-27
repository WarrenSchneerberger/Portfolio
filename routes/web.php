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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/PHP', function () {
    return view('projet/php');
});

Route::get('/JAVA', function () {
    return view('projet/java');
});

Route::get('/BDD', function () {
    return view('projet/bdd');
});

Route::get('/Stage-1er', function () {
    return view('projet/stage1er');
});

Route::middleware('auth')->group(function () {
    Route::get('/ajoutArticle', function () {
        return view('ajout/article');
    });
    Route::get('/ajoutCategorie', function () {
        return view('ajout/categorie');
    });
    Route::get('/modif', function () {
        return view('modif/modif');
    });
});

Route::post('issertA', 'ArticleController@issert')->name('issertArticle');
Route::post('update', 'ArticleController@update')->name('updateArticle');
Route::post('supp', 'ArticleController@supp')->name('suppArticle');
Route::post('issertC', 'CategorieController@issert')->name('issertCategorie');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
