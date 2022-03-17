<?php

use App\Http\Controllers\RunController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\UserController::class, 'index']);
Route::post('/typeA', [RunController::class, 'runningTypeA'])->name('running.a');
Route::post('/typeB', [RunController::class, 'runningTypeB'])->name('running.b');