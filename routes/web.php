<?php

declare(strict_types=1);

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\HomePage;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomePage::class, '__invoke'])
    ->name('home.homePage');

    // USERS
Route::get('/users', [UserController::class, 'list'])
    ->name('get.users.list');

Route::get('/users/{userId}', [UserController::class, 'show'])
    ->name('get.user.show');

    // CARS

Route::group(['prefix' => 'b/cars'], function () {
    Route::get('', [CarController::class, 'index'])
        ->name('cars.index');

    Route::get('{carId}', [CarController::class, 'show'])
        ->name('cars.show');

    Route::get('dashboard/index', [CarController::class, 'dashboard'])
        ->name('cars.dashboard');
});
