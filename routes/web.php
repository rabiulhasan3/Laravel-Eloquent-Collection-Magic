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


Route::get('take','eloquentMagicCollectionController@take');
Route::get('chunk','eloquentMagicCollectionController@chunk');

Route::get('where','whereController@where');
Route::get('orWhere','whereController@orWhere');
Route::get('whereBetween','whereController@whereBetween');
Route::get('where-not-between','whereController@whereNotBetween');
Route::get('where-in','whereController@where_in');
Route::get('where-null','whereController@whereNull');
Route::get('where-not-null','whereController@WhereNotNull');
Route::get('where-not-in','whereController@WhereNotIn');
Route::get('where-date','whereController@WhereDate');
Route::get('where-month','whereController@WhereMonth');
Route::get('where-day','whereController@WhereDay');
Route::get('where-year','whereController@WhereYear');

Route::get('current-month','whereController@currentMonth');

Route::get('where-time','whereController@whereTime');

Route::get('where-column','whereController@whereColumn');
Route::get('where-orderby','whereController@orderBy');

Route::get('pluck','whereController@pluck');

Route::get('delete','whereController@delete');

Route::get('shortby','shortController@shortby');
Route::get('sortByDesc','shortController@sortByDesc');
Route::get('sortKeys','shortController@sortKeys');

Route::get('each','eachMapController@each');
Route::get('map','eachMapController@map');


Route::get('merge','margeConcatController@merge');
Route::get('concat','margeConcatController@concat');