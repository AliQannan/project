<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\articalController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//create artical
Route::post('/createArtical', articalController::class . "@createArtical");


//get specific artical ;

Route::get('/getArticals/{id?}', articalController::class . "@getArtical");
//update artical
Route::put('/updateArtical/{id}' , articalController::class . '@updateArtical');
//delete artical
Route::delete('/deleteArtical/{id}' , articalController::class . "@deleteArtical");