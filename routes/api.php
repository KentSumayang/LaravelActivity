<?php

use App\Http\Controllers\SumayangController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('show_all',[SumayangController::class,'index']);
Route::get('show_one/{id}',[SumayangController::class,'show']);
Route::post('create',[SumayangController::class,'store']);
Route::put('update/{id}',[SumayangController::class,'update']);
Route::delete('delete/{id}',[SumayangController::class,'destroy']);
