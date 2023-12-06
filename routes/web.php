<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/welkom', function () {
//     // return view('welcome');
//     return 'Hello world';
// });

// Route::get('/users/{id}/{name}', function($id, $name){
//     return 'This is user'.$name. 'with an if of ' .$id;
// });

Route::get('/','Pagescontroller@index');



Route::get('/about', function(){
    return view('pages.about');
});


