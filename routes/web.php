<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PageController;
use App\Http\Middleware\IsAuthenticated;
use App\Http\Middleware\IsNotAuthenticated;
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

Route::get("/", [PageController::class, 'home'])->name("page.home");


// Route::get('/inventory',[ItemController::class,'index'])->name('item.index');
// Route::post('/inventory',[ItemController::class,'store'])->name("item.store");
// Route::get('/inventory/create',[ItemController::class,'create'])->name('item.create');
// Route::get('/inventory/{id}',[ItemController::class,'show'])->name('item.show');
// Route::get('/inventory/{id}/edit',[ItemController::class,'edit'])->name('item.edit');
// Route::put("/inventory/{id}",[ItemController::class,"update"])->name('item.update');
// Route::delete('/inventory/{id}',[ItemController::class,"destroy"])->name("item.destroy");

Route::middleware(IsAuthenticated::class)->group(function () {

    Route::resource("inventory", ItemController::class);
    Route::resource("category", CategoryController::class);
    Route::controller(HomeController::class)->prefix("dashboard")->group(function () {

        Route::get("home", "home")->name("dashboard.home");
    });
});

Route::controller(AuthController::class)->group(function () {
    Route::middleware(IsNotAuthenticated::class)->group(function () {
        Route::get("register", "register")->name("auth.register");
        Route::post("register", "store")->name("auth.store");
        Route::get("login", "login")->name("auth.login");
        Route::post("login", "check")->name("auth.check");
    });

    Route::middleware(IsAuthenticated::class)->group(function () {

        Route::post("logout", "logout")->name("auth.logout");
    });
});
