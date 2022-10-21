<?php
use App\Http\Controllers\StretcherController;
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
Route::get('/',  'App\Http\Controllers\HomeController');

Route::get('stretcher/criteria', [StretcherController::class , 'criteria'])->name('stretcher.criteria');
Route::resource('stretcher', StretcherController::class);
Route::resource('aunit', 'App\Http\Controllers\AnesthesiaUnitController');
Route::resource('aunit', 'App\Http\Controllers\AAnesthesiaUnitController');
// Route::get('stretcher/edit', [StretcherController::class , 'edit'])->name('stretcher.edit');
// Route::get('stretcher/{id}', [StretcherController::class, 'edit'])->name('stretcher.edit');

Route::get('/home', function () {
    return view('home');
});
