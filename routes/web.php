<?php

use App\Http\Controllers\GeraiController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome1');
});
Route::get('/test', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard1');
})->middleware(['auth'])->name('dashboard1');

Route::middleware(['auth'])->group(function () {
    Route::resource('/bill','App\Http\Controllers\BillController'::class);

// Route::get('/user','App\Http\Controllers\RegisteredUserController'::class);

// Route::resource('/approvelic','App\Http\Controllers\ApprovelicController'::class);

Route::resource('/user','App\Http\Controllers\UserController'::class);

// Route::resource('/cerKes','App\Http\Controllers\CerKesController'::class);

Route::resource('/gerai',GeraiController::class);

Route::resource('/inRec','App\Http\Controllers\InRecController'::class);

Route::resource('/ivReg','App\Http\Controllers\IvRegController'::class);

Route::resource('/jadual','App\Http\Controllers\JadualController'::class);

Route::resource('/laporan','App\Http\Controllers\LaporanController'::class);

Route::resource('/lesen','App\Http\Controllers\LesenController'::class);

Route::resource('/lesen_pay','App\Http\Controllers\LesenPayController'::class);

Route::resource('/sysCon','App\Http\Controllers\SysConController'::class);

});



require __DIR__.'/auth.php';
