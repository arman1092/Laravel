<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller;
use App\Http\Controllers\Dcontroller;
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

Route::get('/register',[Dcontroller::class,'index']);
Route::post('/register',[Dcontroller::class,'register']);
