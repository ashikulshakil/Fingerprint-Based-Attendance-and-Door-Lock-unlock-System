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
    return view('pages.home');
});
Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/server', function () {
    return view('pages.server');
});

Route::get('/admin', function () {
    return view('pages.admin');
});
Route::get('/adminlogin', function () {
    return view('pages.login');
});
Route::get('/enroll', function () {
    return view('pages.enroll');
});

Route::get('/enter', function () {
    return view('pages.enter');
});
Route::get('/about', function () {
    return view('pages.about');
});





Route::get('addEmployee', ['as' => 'addEmployee', 'uses' => 'UserController@addEmployee']);
Route::get('/showRequest', function () {
    return view('pages.showRequest');
});
 
//Route::post('/postlogin', ['as' => 'postLogin', 'uses' => 'UserController@postLogin']);
Route::get('/postlogin/{id}', ['as' => 'postLogin', 'uses' => 'UserController@variableFromBlade']);
Route::get('/requestdata','requestController@requestcollect');
Route::post('/postAdd', ['as' => 'postAdd', 'uses' => 'UserController@postAdd']);
Route::post('/postlogin', ['as' => 'postLogin', 'uses' => 'UserController@postLogin']);
Route::post('/insertRecord', ['as' => 'insertRecord', 'uses' => 'UserController@insertRecord']);
Route::get('/showdata','showrecordController@showrecordcollect');
Route::post('/showRecord', ['as' => 'showRecord', 'uses' => 'UserController@showRecord']);
Route::get('/showdetails','UserController@showRecord');

Route::post('/showRecordDate', ['as' => 'showRecordDate', 'uses' => 'UserController@showRecordDate']);
Route::post('/test1', ['as' => 'test1', 'uses' => 'UserController@switchInfo1']);

Route::get('test/{prisw}',
        ['as'=> 'test', 'uses'=>'UserController@switchInfo']
);

Route::get('test1/{prisw1}',
        ['as'=> 'test1', 'uses'=>'UserController@switchInfo1']
);
Route::get('test2/{prisw2}',
        ['as'=> 'test2', 'uses'=>'UserController@switchInfo2']
);
Route::get('test3/{prisw3}/{prisw4}',
        ['as'=> 'test3', 'uses'=>'UserController@switchInfo3']
);


Route::post('/changePassword', ['as' => 'changePassword', 'uses' => 'UserController@changePassword']);
Route::get('/logout','userController@logout');
Route::post('/login', ['as' => 'login', 'uses' => 'UserController@login']);