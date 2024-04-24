<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/user', [UserController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::middleware(AuthMiddleware::class)->group(function(){
    Route::get('/user', [UserController::class, 'get']);
    Route::get('/schedule', [ScheduleController::class, 'get']);
    Route::post('/ticket', [TicketController::class, 'create']);
    Route::get('/ticket', [TicketController::class, 'index']);
    Route::get('/ticket/{id}', [TicketController::class, 'show']);
});