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

Route::get('/PPE', function () {
    return view('projet/ppe');
});

Route::get('/SI5', function () {
    return view('projet/si5');
});

Route::get('/SI6', function () {
    return view('projet/si6');
});

Route::get('/SLAM2', function () {
    return view('projet/slam2');
});

Route::get('/Stage-1er', function () {
    return view('projet/stage1er');
});

Route::middleware('auth')->group(function () {
    Route::get('/ajoutArticle', function () {
        return view('ajout/article');
    });

    Route::get('/modif', function () {
        return view('modif/modif');
    });
});

Route::post('issert', 'ArticleController@issert')->name('issertArticle');
Route::post('update', 'ArticleController@update')->name('updateArticle');
Route::post('supp', 'ArticleController@supp')->name('suppArticle');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
