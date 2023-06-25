<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController; //追記
use App\Http\Controllers\MoneyManagementController; //追記
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


Route::get('/list', [TodoListController::class, 'index']);

Route::get('/mm', [MoneyManagementController::class, 'index']);
Route::get('/mm/create', [MoneyManagementController::class, 'create'])->name('money.toroku');
Route::post('/mm/store', [MoneyManagementController::class, 'store'])->name('moneydata.store');
