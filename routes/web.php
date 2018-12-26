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

Auth::routes();

Route::get('home',function (){
	return view('homelog');
});

Route::get('facebook', function () {
    return view('facebook');
});
Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');

Route::get('king','KingQueenController@King');
/*
Route::get('upload', function(){
	return view('upload');
});

Route::post('uploadKing','KingQueenController@uploadKing');
Route::post('uploadQueen','KingQueenController@uploadQueen');*/

Route::get('king','KingQueenController@showKing');
Route::get('queen','KingQueenController@showQueen');

Route::any('voteKing','KingQueenController@voteKing');
Route::any('voteQueen','KingQueenController@voteQueen');

Route::get('KingsQueens', function(){
	return view('kingqueen');
});

Route::get('noti', function(){
	return view('signed');
});
Route::get('votedKing', function(){
	return view('votedKing');
});
Route::get('votedQueen', function(){
	return view('votedQueen');
});

