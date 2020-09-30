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

Route::get('/', 'MemberController@index');

Route::get('/show', 'MemberController@getMembers');

Route::post('/save', 'MemberController@save');

Route::post('/delete', 'MemberController@delete');

Route::post('/update', 'MemberController@update');
