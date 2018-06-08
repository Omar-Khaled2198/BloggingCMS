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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/post/create',[

        'uses' => 'PostController@create',
        'as' => 'PostForm'
    ]);

    Route::post('post/store',[

        'uses' => 'PostController@store',
        'as' => 'CreatePost'
    ]);

    Route::get('/category/index',[

        'uses' => 'CategoryController@index',
        'as' => 'Categories'
    ]);

    Route::get('/category/create',[

        'uses' => 'CategoryController@create',
        'as' => 'CategoryForm'
    ]);

    Route::post('category/store',[

        'uses' => 'CategoryController@store',
        'as' => 'CreateCategory'
    ]);

    Route::get('/category/edit/{id}',[

        'uses' => 'CategoryController@edit',
        'as' => 'EditCategory'
    ]);

    Route::post('/category/update/{id}',[

        'uses' => 'CategoryController@update',
        'as' => 'UpdateCategory'
    ]);

    Route::get('/category/delete/{id}',[

        'uses' => 'CategoryController@destroy',
        'as' => 'DeleteCategory'
    ]);

});