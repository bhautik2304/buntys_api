<?php

use App\Http\Controllers\{authcontroller,appointmentController,StafftypeController,StaffController,ServiceController, CostumerController, ServicetypeController, StoreController};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/costomer',CostumerController::class);
Route::apiResource('/store',StoreController::class);

Route::apiResource('/stufftype',StaffController::class);
Route::apiResource('/stuff',StoreController::class);

Route::apiResource('/Servicetype',ServicetypeController::class);
Route::apiResource('/Service',ServiceController::class);

Route::post('/costumertype',[CostumerController::class,'costomertypes']);
Route::get('/costumertype',[CostumerController::class,'costomer']);

// Route::apiResource('/appointment', appointmentController::class);

// Route::post('/auth', [authcontroller::class]);

