<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurchaseController;

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
    return view('purchase-index');
});


Route::get('/purchase-list', [PurchaseController::class, 'history_view'])->name('purchase.list');
Route::get('/purchase', [PurchaseController::class, 'index'])->name('purchase.index');
Route::post('/purchase', [PurchaseController::class, 'store'])->name('purchase.store');
Route::get('/purchase/{id}', [PurchaseController::class, 'show'])->name('purchase.show');
