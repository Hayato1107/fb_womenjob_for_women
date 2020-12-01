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
// LP獲得用
Route::get('jo', function () {
    return view('fb.check'); //確認用LP
    // return view('fb.job'); //獲得LP(1)
});

// 女性求人訴求 - OS識別x遷移
Route::get('os', 'AdController@os');

// LP確認用
Route::get('cccheck', function () {
    return view('fb.job'); //獲得LP(1)
});
