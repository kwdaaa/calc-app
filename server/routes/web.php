<?php

use Illuminate\Support\Facades\Route;

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


// @で実行したい関数の指定をする。
// http://localhost/calcs/{num1}/{calc}/{num2}のURLにアクセスがあった場合、MessageControllerのshow関数を実行
// {num1}と{num2}には数字が入る。
// {calc}には addition / subtraction / multiplication / divisionのいずれかが入る。
// 例：http://localhost/calcs/1/addition/2
Route::get('calcs/{num1}/{what}/{num2}', 'MessageController@calc');
