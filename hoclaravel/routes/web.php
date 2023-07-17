<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CustomerController;

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

Route::get('/list-customer',[CustomerController::class, 'list_customer']);
Route::post('/list-customer',[CustomerController::class, 'list_customer'])->name('search-customer');
Route::match(['GET', 'POST'], '/add/customer', [CustomerController::class, 'add'])->name('add-customer');
