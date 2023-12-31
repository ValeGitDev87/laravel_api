<?php

use App\Http\Controllers\Api\V1\ThreadController;
use App\Models\Thread;
use Illuminate\Http\Request;
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

//! usando la creazione  Route in questo modo non dovranno essere definite ne le atre rotte ne
//! ne l'accopiata Controller Metodo;
Route::apiResource('v1/threads',\App\Http\Controllers\Api\V1\ThreadController::class);

