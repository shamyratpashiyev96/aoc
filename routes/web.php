<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;

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

Route::get('/', function(){
    return redirect('/tm');
});

Route::get('/{lang}', [SiteController::class, 'index'])->name('main_page');
Route::get('/{lang}/news/{page_num?}', [SiteController::class, 'news'])->name('news_page');
Route::get('/{lang}/single-news/{id}', [SiteController::class, 'single_news'])->name('single_news_page');

Route::get('login',[AuthController::class, 'login'])->name('login');
Route::post('login-post',[AuthController::class, 'loginPost'])->name('loginPost');
Route::get('logout',[AuthController::class, 'logout'])->name('logout');


Route::group(['prefix'=>'adminpanel','middleware'=>'auth'], function(){
    Route::resource('news', AdminController::class);
});
