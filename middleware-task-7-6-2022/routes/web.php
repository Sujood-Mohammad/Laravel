<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;
use App\Http\Middleware\CheckBlacklist;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create-post',[PostController::class, 'create'])->middleware(CheckBlacklist::class);

//or to group

Route::middleware(CheckBlacklist::class)->namespace('\App\Http\Controllers\Api')->group(function(){

Route::get("edit-post",[PostController::class, 'edit']);
});

