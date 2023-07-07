<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\InvoiceController;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//ignore for now
/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::prefix('v1')->group(function(){
    //users routes
    Route::get('/users',            [UserController::class, 'index']);
    Route::get('/users/{user}',     [UserController::class, 'show'])->middleware('ability:test-show'); //auth with the method ability;
    Route::get('/login',            [AuthController::class, 'login']);
    
    
    //invoices routes
    Route::get('/invoices',              [InvoiceController::class, 'index']);
    Route::get('/invoices/{invoice}',    [InvoiceController::class, 'show']);
    Route::post('/invoices',             [InvoiceController::class, 'store']);
    Route::put('/invoices/{invoice}',    [InvoiceController::class, 'update']);
    Route::delete('/invoices/{invoice}', [InvoiceController::class, 'destroy']);

    //login routes
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
    Route::get('/test', [TestController::class, 'index'])->middleware('auth:sanctum'); //precisa ter um token válido.

    Route::apiResource('/invoices', InvoiceController::class)->middleware('auth:sanctum'); //método mágico dentro da controller invoice
});