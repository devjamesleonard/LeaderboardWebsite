<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\leaderBoardController;
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


Route::get('/', [leaderBoardController::class, 'index']);
Route::get('/registerportal', [leaderBoardController::class, 'registerportal'])->name('registerportal');
Route::get('/loginportal', [leaderBoardController::class, 'loginportal'])->name('loginportal');
Route::post('/saveItem', [leaderBoardController::class, 'saveItem'])->name('saveItem');

Route::post('/openBoard/{id}', [leaderBoardController::class, 'openBoard'])->name('openBoard');
Route::get('/openBoard/{id}', [leaderBoardController::class, 'openBoard'])->name('openBoard');
Route::post('/saveCategory/{id}', [leaderBoardController::class, 'saveCategory'])->name('saveCategory');
Route::post('/addItem/{id}', [leaderBoardController::class, 'addItem'])->name('addItem');
Route::post('/deleteItem/{id}', [leaderBoardController::class, 'deleteItem'])->name('deleteItem');
Route::post('/editTitle/{id}', [leaderBoardController::class, 'editTitle'])->name('editTitle');
Route::post('/editRanking/{id}', [leaderBoardController::class, 'editRanking'])->name('editRanking');
Route::post('/editSummary/{id}', [leaderBoardController::class, 'editSummary'])->name('editSummary');
Route::post('/deleteCategory/{id}', [leaderBoardController::class, 'deleteCategory'])->name('deleteCategory');
Route::post('/editCategory/{id}', [leaderBoardController::class, 'editCategory'])->name('editCategory');
Route::post('/editLeaderboard/{id}', [leaderBoardController::class, 'editLeaderboard'])->name('editLeaderboard');
Route::post('/deleteLeaderboard/{id}', [leaderBoardController::class, 'deleteLeaderboard'])->name('deleteLeaderboard');
Route::post('/login', [leaderBoardController::class, 'login'])->name('login');
Route::post('/register', [leaderBoardController::class, 'register'])->name('register');
Route::get('/signout', [leaderBoardController::class, 'signout'])->name('signout');
Route::get('/openRankings/{id}', [leaderBoardController::class, 'openRankings'])->name('openRankings');
Route::get('/openTags/{id}', [leaderBoardController::class, 'openTags'])->name('openTags');
Route::post('/editTags/{id}', [leaderBoardController::class, 'editTags'])->name('editTags');

Route::post('/openTagOption/{id}', [leaderBoardController::class, 'openTagOption'])->name('openTagOption');
Route::get('/openTagOptionRedo/{id}', [leaderBoardController::class, 'openTagOptionRedo'])->name('openTagOptionRedo');
Route::post('/editItemCat/{id}', [leaderBoardController::class, 'editItemCat'])->name('editItemCat');
