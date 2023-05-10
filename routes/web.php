<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\data;
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

Route::get('/Signup',[data::class,'signup']);

Route::get('/Login',[data::class,'login']);

