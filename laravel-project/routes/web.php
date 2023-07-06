<?php

use App\Http\Controllers\CarInfoController; //add
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController; //追記
use App\Http\Controllers\MoneyManagementController; //追記
use App\Models\MoneyManagements;

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



/*MoneyManagement */
Route::prefix('mm')->group(function () {
    Route::get('/', [MoneyManagementController::class, 'index'])->name('money.index');
    Route::get('/create', [MoneyManagementController::class, 'create'])->name('money.toroku');
    Route::post('/store', [MoneyManagementController::class, 'store'])->name('moneydata.store');
    Route::get('/show/{id}', [MoneyManagementController::class, 'show'])->name('money.show'); //詳細画面
    Route::delete('/destroy/{id}', [MoneyManagementController::class, 'destroy'])->name('money.destroy');
    Route::put('/update', [MoneyManagementController::class, 'update'])->name('money.update');
    Route::get('/edit/{id}', [MoneyManagementController::class, 'edit'])->name('money.edit');
});

Route::prefix('/car_info')->group(function () {
    Route::get('/', [CarInfoController::class, 'index'])->name('car_info.index');
    Route::get('/create', [CarInfoController::class, 'create'])->name('car_info.create');
    Route::get('/store', [CarInfoController::class, 'store'])->name('car_info.store');
});