<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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
    return view('index');
});
// Route::get('/home', function () {
//     return view('home');
// });


// LOGIN
route::get('/login',[AuthController::class,'index'])->name('login');
route::post('/postlogin',[AuthController::class,'postlogin'])->name('postlogin');
route::get('/logout',[AuthController::class,'logout'])->name('logout');

// CRUD DATA USER
Route::group(['middleware'=> ['auth','checkrole:admin']], function (){
    route::get('/user',[UserController::class,'index']);
    route::post('/user/store',[UserController::class,'store']);
    route::post('/user/update/{id}',[UserController::class,'update']);
    route::get('/user/update/{id}',[UserController::class,'updateview']);
    route::get('/user/destroy/{id}',[UserController::class,'destroy']);
});

Route::group(['middleware'=> ['auth','checkrole:admin,kasir']], function (){
    route::get('/home',[HomeController::class,'index'])->name('home');
});