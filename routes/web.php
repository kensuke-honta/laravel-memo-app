<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoController;

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
    return view('welcome');
});

Route::get('/home', [MemoController::class, 'home']);
Route::get('/index', [MemoController::class, 'showIndex']) ->name('memo.showIndex');
Route::get('/create', [MemoController::class, 'create']) ->name('memo.create');
Route::get('/detail', [MemoController::class, 'detail']) ->name('memo.detail');
Route::get('/update', [MemoController::class, 'update']) ->name('memo.update');
