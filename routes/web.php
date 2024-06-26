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
Route::get('/home/news/{id}', [HomeController::class,'detailNews'])->middleware('auth','verified');
Route::get('/search',[HomeController::class,'search']);
Route::get('/home/profil',[HomeController::class,'profil'])->middleware('auth','verified');
// Route::post('/mark-as-read/{newsId}',[HomeController::class,'markAsRead'])->name('markAsRead');
// Route::get('/mark-as-read/{id}', 'NewsController@markAsRead');


Route::get('/logout',[HomeController::class,'logout1'])->middleware('auth','verified');

Route::get('/admin/category',[NewsController::class,'index']);
Route::post('/admin/category/create',[NewsController::class,'create']);
Route::get('/admin/category/delete/{id}',[NewsController::class,'destroy']);


Route::get('/admin/news',[NewsController::class,'news']);
Route::get('/admin/news/create',[NewsController::class,'tambah']);
Route::post('/admin/news/create/post',[NewsController::class,'saveNews']);
Route::get('/admin/news/detail/{id}',[NewsController::class,'detail']);
Route::post('/admin/news/detail/edit/{id}',[NewsController::class,'editNews']);
Route::get('/admin/news/delete/{id}',[NewsController::class,'destroyNews']);
Route::get('/admin/setting',[NewsController::class,'settings']);
Route::get('/admin/setting/detail/{id}',[NewsController::class,'editset']);
Route::post('/admin/setting/detail/edit/{id}',[NewsController::class,'editsetlogic']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
