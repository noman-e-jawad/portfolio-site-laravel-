<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
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
    return view('home');
})->name('home');
Route::get('/admin', [AdminController::class,'index'])->name('login');
Route::post('/admin',[AdminController::class,'makeLogin']);

Route::group(['middleware' => 'auth:admin'],function(){

    Route::get('/dashbord',[AdminController::class,'dashbord']);
    Route::get('/page-add',[PageController::class,'AddPage'])->name('page-add');
});
