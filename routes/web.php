<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use Carbon\Carbon;

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

Route::get('/', [ChatController::class, 'index',]);
Route::get('messages', [ChatController::class, 'fetchMessages',]);
Route::post('messages', [ChatController::class, 'sendMessage',]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/tester', function () {
   
// });