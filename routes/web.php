<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site;

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

Route::get('/',[Site::class,'index'])->name('site-home');
Route::get('shop',[Site::class,'load_shop_page'])->name('site-shops');
Route::get('blog',[Site::class,'blog_list'])->name('site-blogs');
Route::get('contact',[Site::class,'site_contact'])->name('site-contact');
Route::get('login',[Site::class,'login_page'])->name('site-login');
