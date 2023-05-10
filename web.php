<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demo1;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/demo1/{name}/{contact?}',[demo1::class,'index4']);


Route::get('/Home',[demo1::class,'Home']);

Route::get('/Gallery',[demo1::class,'Gallery']);

Route::get('/Contact',[demo1::class,'Contact']);

Route::get('/About',[demo1::class,'About']);
