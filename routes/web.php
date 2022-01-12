<?php

use App\Http\Controllers\AuthController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', [AuthController::class,'index'])->name('login.index')->middleware('guest');
Route::post('/login', [AuthController::class,'login'])->name('login.autheticate')->middleware('guest');;
Route::get('/',  function ()
{
   return view('home');
})->middleware('auth');
