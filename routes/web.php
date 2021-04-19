<?php

use App\Http\Controllers\BadwordController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard')->middleware('auth');;
    Route::get('/chat', function () {
        return Inertia::render('Chat/container');
    })->name('Chat')->middleware('auth');;
});

Route::middleware('auth:sanctum')->group(function() {
Route::get('/userid', [ChatController::class, 'getUserId'])->middleware('auth');;
Route::get('/chat/rooms', [ChatController::class, 'index'])->middleware('auth');;
Route::get('/badwords',[BadwordController::class,'index'])->middleware('auth');;
});

Route::middleware('auth:sanctum')->prefix('/chat/room/{roomId}/')->group(function () {
    Route::get('messages', [ChatController::class, 'messages'])->middleware('auth');;
    Route::post('message', [ChatController::class, 'newMessage'])->middleware('auth');;
    Route::delete('messages', [ChatController::class, 'deleteMessages'])->middleware('auth');;
});

