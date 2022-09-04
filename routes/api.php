<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByPath;

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
Route::group([
    'prefix' => '/v1',
    'middleware' => ['api', InitializeTenancyByPath::class],
], static function ($api) {
    Route::get('login', [HomeController::class, 'tenant']);

});
