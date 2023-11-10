<?php
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TempratureController;
use App\Models\tempratur;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// route::get('/index', [PenggunaController::class, 'indexApi']);
// route::get('/pengguna/create', [PenggunaController::class, 'create']);
route::get('/index', [TempratureController::class, 'index']);
// route::post('/tempratur', [TempratureController::class, 'store']);

route::post('/tempratur/store', [TempratureController::class, 'store']);
// route::delete('/temprature/destroy{data}', [PenggunaController::class, 'destroy']);
Route::put('/temperatures/{id}', [TemperatureController::class, 'update']);
