<?php

use Illuminate\Http\Request;

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


Route::group(['middleware'=>'auth:api', 'prefix'=>'v1'], function(){

$eventsApiController="\App\Http\Controllers\EventsApiController";
Route::post('handleRegistration', "{$eventsApiController}@handleRegistration");
/* Route::post('check', function (Request $request)

{

    return $request->all();
}); */

});