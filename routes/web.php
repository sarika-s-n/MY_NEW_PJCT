<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
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


Route::get('/login', [AuthManager::class,'login'])->name(name:'login');
Route::get('/show_user',[AuthManager::class,'show'])->name(name:'show.user');
Route::post('/login', [AuthManager::class,'loginPost'])->name(name:'login.post');
Route::get('/', function () {
    return view('welcome');
})->name(name:'home');