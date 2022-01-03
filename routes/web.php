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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    // return view('templates/master');
    return view('dashboard');
});

Route::resource('/category','CategoryController' );
Route::resource('/slot','SlotController' );
Route::resource('/rate','rateController' );
Route::resource('/parking','parkingController' );


Route::get('/invoice','PdfController@report' );
Route::get('/invoice-pdf','PdfController@report2' );




// Route::get('/create', function () {
//     // return view('templates/master');
//     return view('category/create');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
