<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
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
    return view('blog.index');
});
Route::get('/about', function () {
    return view('blog.about');
});
Route::get('/contact', function () {
    return view('blog.contact');
});
Route::get('/elements', function () {
    return view('blog.elements');
});

Route::get('/recipe-post', function () {
    return view('blog.recipe-post');
});
Route::get('/recipe', [RecipeController::class, 'index']);
