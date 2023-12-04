<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DataController;

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

Route::get('/', [DataController::class, 'index']);

Route::get('add', function () {
	return view('add');
});
Route::post('store', [DataController::class, 'store']);

Route::get('edit/{id}', [DataController::class, 'get']);
Route::post('update', [DataController::class, 'update']);

Route::get('deleteConfirm/{id}', [DataController::class, 'getDestroy']);
Route::delete('delete', [DataController::class, 'destroy']);
