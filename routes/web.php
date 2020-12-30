<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProducsController;

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
    return view('auth\login4');
});

Route::get('/new-login', function (){
    return view('auth\login4');
});

Route::get('/new-register', function (){
    return view('auth\register4');
});

Route::get('/new-reset' , function (){
    return view('auth\passwords\resetPassword4');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('ajaxItems','ItemController');
Route::delete('ajaxItems/destroy/{id}','ItemController@destroy');
