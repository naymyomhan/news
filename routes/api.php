<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\PriceController;
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

Route::get('/news/{type}',[NewsController::class,'getNews']);


Route::get('/local/states',[PriceController::class,'getLocalStates']);
Route::get('/local/cities/{state}',[PriceController::class,'getLocalCities']);

Route::get('/global/countries',[PriceController::class,'getGlobalCountries']);
Route::get('/global/cities/{country}',[PriceController::class,'getGlobalCities']);

Route::get('/items',[PriceController::class,'getItems']);

Route::get('/marquee_text',[PriceController::class,'getMarqueeText']);

Route::get('/prices/local/{state}/{city}/{item_name}',[PriceController::class,'getLocalPrices']);
Route::get('/prices/global/{country}/{city}/{item_name}',[PriceController::class,'getGlobalPrices']);

Route::get('/prices/random/local',[PriceController::class,'addLocalItems']);
Route::get('/prices/random/global',[PriceController::class,'addGlobalItems']);