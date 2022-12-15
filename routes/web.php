<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/dashboard', [App\Http\Middleware\AdminMiddleware::class, 'index'])->name('dashboard');


Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    //User routes
    Route::get('user', [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('user/create', [App\Http\Controllers\Admin\UserController::class, 'create']);
    Route::post('user', [App\Http\Controllers\Admin\UserController::class, 'store']);
    Route::get('user/{user}/edit', [App\Http\Controllers\Admin\UserController::class, 'edit']);
    Route::put('user/{user}', [App\Http\Controllers\Admin\UserController::class, 'update']);
   

    //Reward routes
    Route::get('reward', [App\Http\Controllers\Admin\RewardController::class, 'index']);
    Route::get('reward/create', [App\Http\Controllers\Admin\RewardController::class, 'create']);
    Route::post('reward', [App\Http\Controllers\Admin\RewardController::class, 'store']);
    Route::get('reward/{reward}/edit', [App\Http\Controllers\Admin\RewardController::class, 'edit']);
    Route::put('reward/{reward}', [App\Http\Controllers\Admin\RewardController::class, 'update']);


    //Wasteitems
    Route::get('wasteitem', [App\Http\Controllers\Admin\WasteitemController::class, 'index']);
    Route::get('wasteitem/create', [App\Http\Controllers\Admin\WasteitemController::class, 'create']);
    Route::post('wasteitem', [App\Http\Controllers\Admin\WasteitemController::class, 'store']);
    Route::get('wasteitem/{wasteitem}/edit', [App\Http\Controllers\Admin\WasteitemController::class, 'edit']);
    Route::put('wasteitem/{wasteitem}', [App\Http\Controllers\Admin\WasteitemController::class, 'update']);


    

}
);
