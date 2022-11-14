<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MesaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/mesa', [MesaController::class, 'index']);
Route::get('/mesa/{id}', [MesaController::class, 'show']);
Route::post('/mesa', [MesaController::class, 'store']);
Route::put('/mesa/{id}', [MesaController::class, 'update']);
Route::delete('/mesa/{id}', [MesaController::class, 'destroy']);
// Route::resource('   students', StudentController::class);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
