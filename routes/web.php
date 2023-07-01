<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EloquentCollectionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomePageController;

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

//Simples routes
route::get('/about', function() {
    return view('CodeTape.about');
});

route::get('/contact', function() {
    return view('CodeTape.contact');
});

route::get('/customers', [CustomerController::class, 'list']);

//Users routes
Route::get('/users' ,[UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');


//Eloquent collections
Route::get('/collections', [EloquentCollectionController::class, 'CollectionsExemples']);

//Policies
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/invoices', [InvoiceController::class, 'store'])->name('invoices.store')
    ->middleware('can:isAdmin, App\Models\Invoices')
    ->can('isAdmin', App\Models\Invocies::class);


//Middawares work on the routes
Route::get('/log', [LoginController::class, 'index'])->middleware('my_auth');
Route::get('/home_page', [HomePageController::class, 'login']);
