<?php

use App\Http\Controllers\Api\ListController;
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
Route::get('listes',[ListController::class,'index'])->name('listes');
Route::post('listes/create',[ListController::class,'store'])->name('listes/create');
Route::put('listes/update/{list}',[ListController::class,'update'])->name('listes/update');
Route::delete('listes/delete/{list}',[ListController::class,'destroy'])->name('listes/delete');
