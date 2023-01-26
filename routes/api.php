<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\OrderController;
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

Route::middleware(['auth:sanctum','dapat'])->get('/user', function (Request $request) {
    return $request->user();

});

Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    // Route::apiResource('coffee', CoffeeController::class);
    //FOR COFFEE
    Route::get('Welcome',[CoffeeController::class,'hello']);
    Route::get('coffees', [CoffeeController::class, 'index']);
    Route::post('coffee', [CoffeeController::class, 'store']);
    Route::get('coffeefinds/{id}', [CoffeeController::class, 'show']);
    Route::put('coffeeupdate/{id}',[CoffeeController::class, 'update']);
    Route::delete('coffeedelete/{id}', [CoffeeController::class, 'destroy']);

    //FOR MEMBERS
    Route::post('addmember',[MembershipController::class, 'createmember']);
    Route::get('showmembers',[MembershipController::class, 'show']);
    Route::get('findmember/{id}',[MembershipController::class, 'pick']);
    Route::put('updatemember/{id}',[MembershipController::class, 'update']);
    Route::delete('deletemember/{id}',[MembershipController::class, 'delete']);

    //FOR ORDERS
    Route::post('addorder',[OrderController::class, 'createorder']);
    Route::get('showorders',[OrderController::class, 'show']);
    Route::get('findorder/{id}',[OrderController::class, 'pick']);
    Route::put('updateorder/{id}',[OrderController::class, 'update']);
    Route::delete('deleteorder/{id}',[OrderController::class, 'delete']);

});
