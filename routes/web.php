<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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

Route::get('/', [CustomerController::class, 'get_data']);
Route::post('/', [CustomerController::class, 'save_data'])->name('customer.save');
Route::put('/update/{id}', [CustomerController::class, 'update_data'])->name('customer.update');
Route::delete('/destroy/{id}', [CustomerController::class, 'delete_data'])->name('customer.destroy');

