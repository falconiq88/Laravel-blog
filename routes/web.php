<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

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

Route::get('/', 'App\Http\Controllers\Posts@all')->middleware(['auth']);
Route::get('/about', function(){return view('about');})->middleware(['auth']);
Route::get('/posts/{post:slug}', 'App\Http\Controllers\Posts@show');
Route::post('/posts/{post:slug}/comments', 'App\Http\Controllers\Posts@storeComment');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();


Route::get('create_post',function(){

   return view('posts.create_post',['categories' => Category::all()]);

})->middleware(['auth']);



Route::Post('create_post', 'App\Http\Controllers\Posts@storePost')->middleware(['auth']);;
