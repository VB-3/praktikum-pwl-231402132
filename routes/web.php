<?php

use App\Http\Controllers\TodoTaskController;
use Illuminate\Http\request;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home', [
//         'task'=> 'task1',
//     ]);
// });

Route::get('/', [TodoTaskController::class, 'index']);
Route::post('/', [TodoTaskController::class, 'store']);
Route::delete('/{id}', [TodoTaskController::class, 'destroy']);
