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
Route::get('work1', function () {
    // return view('fb.check'); //確認用LP
    return view('fb.mama'); //獲得LP - ママ活
});

// 男性ママ活訴求 - OS識別x遷移
Route::get('os', 'AdController@os');

// LP確認用
Route::get('cccheck', function () {
    return view('fb.mama'); //獲得LP - ママ活
    
    // return view('fb.job'); //獲得LP(1)
});


//YouTube広告 - リダイレクト(テスト)
// LP獲得用
Route::get('works', function () {
    return view('fb.check'); //確認用LP
    // return redirect('https://a-trade.jp/redirect/biscor?media=G16531'); //ビスコール
});

// LP確認用
Route::get('cccheck2', function () {
    return redirect('https://a-trade.jp/redirect/biscor?media=G16531'); //ビスコール
});