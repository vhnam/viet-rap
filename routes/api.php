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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function () {
    Route::get('artists', 'API\V1\Controllers\ArtistController@index');
    Route::get('artists/{id}', 'API\V1\Controllers\ArtistController@show');
    Route::post('artists', 'API\V1\Controllers\ArtistController@store');
    Route::put('artists/{artist}', 'API\V1\Controllers\ArtistController@update');
    Route::delete('artists/{artist}', 'API\V1\Controllers\ArtistController@delete');
});
