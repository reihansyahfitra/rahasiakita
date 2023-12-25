<?php

use App\Http\Controllers\ContentController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/contents', [ContentController::class, 'showContent']);
Route::get('/contents/info/{id}', [ContentController::class, 'showContentInfo']);
Route::post('/posting/{id}', [ContentController::class, 'postComment']);
