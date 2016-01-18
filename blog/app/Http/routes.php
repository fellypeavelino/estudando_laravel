<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/','PostController@index');

Route::get('/contacts/','ContactController@getContactUsForm');

Route::resource('nerds', 'NerdController');

Route::get('contato', array('as' => 'contato', 'uses' =>'HomeController@contato'));

Route::post('contato', 'HomeController@postContato');

Route::resource('tasks', 'TasksController@create');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
