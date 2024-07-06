<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizzesController;



Route::get('/test', [TestController::class, 'test'])
    ->name('test');
Route::get('/users', [UserController::class, 'users'])
    ->name('users');
    // 一覧表示のルート
Route::get('/quizzes', [QuizzesController::class, 'index'])
    ->name('quizzes.index');
    Route::get('/quizzes/admin',[QuizzesController::class,'admin'])
->middleware('admin')
->name('quizzes.admin');
// クイズ新規作成するためのルート
Route::get('/quizzes/create',[QuizzesController::class,'create'])
->middleware('admin')
->name('quizzes.create');
// 投稿データ保存用のルート作成
Route::post('/quizzes',[QuizzesController::class,'store'])
->name('quizzes.store');
    // クイズ画面の表示ルート
Route::get('/quizzes/{id}', [QuizzesController::class, 'show'])
    ->name('quizzes.show');
    // 編集画面表示のルート
Route::get('/quizzes/{id}/edit', [QuizzesController::class, 'edit'])
    ->name('quizzes.edit');
    // 更新の時のルート
Route::patch('/quizzes/{id}', [QuizzesController::class,'update'])
    ->name('quizzes.update');
    // 問題削除のためのルート
Route::delete('/quizzes/{id}',[QuizzesController::class,'destroy'])
->name('quizzes.destroy');


// Route::get('/quizzes/admin',[QuizzesController::class,'admin'])
// ->middleware('admin')
// ->name('quizzes.admin');




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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
