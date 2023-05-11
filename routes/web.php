<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
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
route::get('/login',[AuthController::class,'index'])->name('login');
route::post('/postlogin',[AuthController::class,'postlogin'])->name('postlogin');
route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::group(['middleware'=> ['auth','checkrole:admin,kasir']], function (){
    route::get('/home',[HomeController::class,'index'])->name('home');
});