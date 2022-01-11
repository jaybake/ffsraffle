<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContestsController;
use App\Http\Controllers\RaffleController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::any('/', [ContestsController::class, 'index']);
Route::get('/dashboard', [ContestsController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/edashboard', function () {
    return view('edashboard');
})->middleware(['auth'])->name('edashboard');

Route::get('/wdashboard', function () {
    return view('wdashboard');
})->middleware(['auth'])->name('wdashboard');

Route::get('xdashboard', [ExtraentriessController::class, 'index']);
Route::get('/xdashboard', function () {
    return view('xdashboard');
})->middleware(['auth'])->name('xdashboard');

require __DIR__.'/auth.php';

Route::middleware(['throttle:ip_address'])->group(function () {
Route::post('/createentry', [RaffleController::class, 'create']);
});
