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
Route::get('women1', function () {
    return view('fb.check'); //確認用LP
    // cccheckを獲得LP(women1)へ
    
    // return view('fb.adultad'); //YouTube - アダルト大人出会い訴求
    // return redirect('http://www.chatpia.jp/recruit/sp/?b=G16531'); //チャットピア - Aトレード
    // return view('fb.job'); //獲得LP(1) - チャットレディーweb
    // return view('fb.adultad'); //YouTube - アダルト大人訴求
    // return view('fb.mama'); //獲得LP - ママ活
});

// OS識別x遷移
Route::get('cccheck', 'AdController@os');

// // LP確認用
// Route::get('cccheck', function () {
//     return view('fb.adultad'); //YouTube - アダルト大人出会い訴求
    
//     // return redirect('http://www.chatpia.jp/recruit/sp/?b=G16531'); //チャットピア - Aトレード
//     // return view('fb.job'); //獲得LP(1)
//     // return view('fb.mama'); //獲得LP - ママ活
// });


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