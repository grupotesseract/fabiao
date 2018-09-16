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

Route::prefix('admin')->group(function () {
    Route::middleware('auth:api')->get('user', function (Request $request) {
        return $request->user();
    });
});

Route::post('pagseguro', 'PagSeguroController@post');

// Route::post('notification', 'PagSeguroController@notification');

Route::post('/pagseguro/notification', [
    'uses' => '\laravel\pagseguro\Platform\Laravel5\NotificationController@notification',
    // 'uses' => 'PagSeguroController@notification',
    'as' => 'pagseguro.notification',
]);

