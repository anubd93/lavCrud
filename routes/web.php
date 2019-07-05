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

Route::get('/', 'MemberController@getMembers');

Route::post('/save', 'MemberController@save');

Route::post('/update/{id}', ['as' => 'member.update', 'uses' => 'MemberController@update']);

Route::delete('/delete/{id}', ['as' => 'member.delete', 'uses' => 'MemberController@delete']);

Route::get('/createTable', 'MemberController@createTable');

Route::get('/deleteTable', 'MemberController@deleteTable');

Route::get('/renameTable', 'MemberController@renameTable');
Route::get('/renameColumn', 'MemberController@renameColumn');