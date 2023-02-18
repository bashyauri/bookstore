<?php

use App\Http\Controllers\AuthorsController;
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
Route::middleware('auth:api')->prefix('v1')->group(function(){
    Route::get('/user',function(Request $request){
        return $request->user();
    });
    Route::get('/authors/{author}',[AuthorsController::class,'show']);
});
//author/{author}
//For one specific author