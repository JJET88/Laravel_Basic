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

Route::get('/', function () {
    return view('index',["data"=>"this is the data passing from web."]);
})->name("page.home");

Route::get('/about-us',fn()=>view('about')->with("name","jjet"))->name("page.about-us");

Route::get('/service',fn()=>view('service')->with('services',"web development"))->name("page.service");