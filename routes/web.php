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

Route::get('/',[

    'uses'=>'FrontController@index',
    'as'=>'Home'
]);

Route::get('/post/{id}',[

    'uses'=>'FrontController@post',
    'as'=>'GetPost'
]);

Route::post('/search',[

    'uses'=>'FrontController@search',
    'as'=>"Search"
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){


    Route::get('post/index',[

        'uses' => 'PostController@index',
        'as' => 'Posts'
    ]);
    Route::get('/post/create',[

        'uses' => 'PostController@create',
        'as' => 'PostForm'
    ]);

    Route::post('post/store',[

        'uses' => 'PostController@store',
        'as' => 'CreatePost'
    ]);


    Route::get('/post/delete/{id}',[

        'uses' => 'PostController@destroy',
        'as' => 'DeletePost'
    ]);

    Route::get('post/deleted',[

        'uses' => 'PostController@deleted',
        'as' => 'DeletedPosts'
    ]);

    Route::get('post/deletePermanently/{id}',[

        'uses' => 'PostController@deletePermanently',
        'as' => 'DeletePermanently'
    ]);

    Route::get('post/restore/{id}',[

        'uses' => 'PostController@restore',
        'as' => 'RestorePost'
    ]);

    Route::get('post/edit/{id}',[

        'uses' => 'PostController@edit',
        'as' => 'EditPost'
    ]);

    Route::post('post/update/{id}',[

        'uses' => 'PostController@update',
        'as' => 'UpdatePost'
    ]);

    //////////////////////////////////////////////////////////////

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

    /////////////////////////////////////////////////////////


    Route::get('/tag/index',[

        'uses' => 'TagController@index',
        'as' => 'Tags'
    ]);

    Route::get('/tag/create',[

        'uses' => 'TagController@create',
        'as' => 'TagForm'
    ]);

    Route::post('tag/store',[

        'uses' => 'TagController@store',
        'as' => 'CreateTag'
    ]);

    Route::get('/tag/edit/{id}',[

        'uses' => 'TagController@edit',
        'as' => 'EditTag'
    ]);

    Route::post('/tag/update/{id}',[

        'uses' => 'TagController@update',
        'as' => 'UpdateTag'
    ]);

    Route::get('/tag/delete/{id}',[

        'uses' => 'TagController@destroy',
        'as' => 'DeleteTag'
    ]);
    //////////////////////////////////////////////////////////

    Route::get('/user/index',[

        'uses' => 'UserController@index',
        'as' => 'Users'
    ]);

    Route::get('/user/create',[

        'uses' => 'UserController@create',
        'as' => 'UserForm'
    ]);

    Route::post('user/store',[

        'uses' => 'UserController@store',
        'as' => 'CreateAdmin'
    ]);
    ///////////////////////////////////////////////////////

    Route::get('/profile/edit/{id}',[

        'uses' => 'ProfileController@edit',
        'as' => 'EditProfile'
    ]);

    Route::post('/profile/update/{id}',[

        'uses' => 'ProfileController@update',
        'as' => 'UpdateProfile'
    ]);

});