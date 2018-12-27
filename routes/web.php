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

Route::get('adminasdfqwerty', function(){
	return view('adminlogin');
});

Route::post('0ZxpO6mib9QhagMx2x2aRaUlD4NAW68KwQww82+sBwt5DpBGbuSKJbD2QclBXw49','AdminController@adminLogin');

Route::any('iSHPiiflaPhbvbmcmAU1LL6XZsO1oqLG','AdminController@enableVoting');
Route::any('PUNdDrZ/Y7ACw9+6fjot/5bpZFfOncPy','AdminController@disableVoting');
Route::any('7CpI2g0zi06mx1p2ogf/odh5BQ/FZKFs','AdminController@showVotes');

