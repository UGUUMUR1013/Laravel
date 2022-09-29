<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\PagesController;

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


// Route::get('/hello', function () {
//     //return view('welcome');
//     return '<h1>Hello World</h1>';
// });



// Route::get('/about', function(){
//     return view('pages.about');
// });

 Route::get('/', 'App\HTTP\Controllers\PagesController@index');
 Route::get('/about', 'App\HTTP\Controllers\PagesController@about'); 
 Route::get('/services', 'App\HTTP\Controllers\PagesController@services'); 
   //asuuh 

// Route::get('/about', function () {     //asuuh
//     return view('pages.about');
// });



// Route::get('/users/{id}/{name}', function ( $id, $name) {
//     return 'This is user '.$name. ' with an id of '. $id;
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
