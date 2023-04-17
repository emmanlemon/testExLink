<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDetailController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/' , '/user-detail');
Route::resource('/user-detail' , UserDetailController::class);