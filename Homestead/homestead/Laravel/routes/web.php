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

Route::get('foo', function(){
	return 'Foo!';
});

Route::get('/page', function(){
    return view('page.index');
});

Route::get('foo/fool', 'FooController@fool');
Route::get('foo/foo2', 'FooController@foo2');
Route::get('foo/foo3', 'FooController@foo3');
Route::get('foo/foo4', 'FooController@foo4');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');
Route::resource('posts', 'PostController');

Route::get('/dbtest/query', function(){
    // connection先を明示しなかった場合、デフォルト接続先のDBを見に行く
    $rows = DB::select('SELECT * FROM users LIMIT 1;');
    var_dump($rows);

    // connection先を明示して投稿用のデータベースを参照しにいく
    $rows = DB::connection('jinro')->select('SELECT * FROM db2_tables LIMIT 1;');
    var_dump($rows);
});

Route::get('/dbtest/model', function(){
    // 特に接続先を明示しないでDB接続が可能
    $rows = \App\db2_table::first();
    var_dump($rows);
});