<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'home'])->middleware('auth','verified');
Route::get('/home/news', [HomeController::class,'index'])->middleware('auth','verified');
Route::get('/logout',[HomeController::class,'logout1'])->middleware('auth','verified');

Route::get('/admin/category',[NewsController::class,'index']);
Route::post('/admin/category/create',[NewsController::class,'create']);
Route::get('/admin/category/delete/{id}',[NewsController::class,'destroy']);


Route::get('/admin/news',[NewsController::class,'news']);
Route::get('/admin/news/create',[NewsController::class,'tambah']);
Route::post('/admin/news/create/post',[NewsController::class,'saveNews']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
