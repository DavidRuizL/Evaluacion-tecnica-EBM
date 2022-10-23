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
Route::get('stretcher/select', [StretcherController::class , 'select'])->name('stretcher.select');
Route::get('stretcher/per1', [StretcherController::class, 'index1' ])->name('stretcher.per1');
Route::get('stretcher/per2', [StretcherController::class, 'index2'  ])->name('stretcher.per2');
Route::get('stretcher/per3', [StretcherController::class, 'index3'  ])->name('stretcher.per3');
Route::resource('stretcher', StretcherController::class);
Route::resource('aunit', 'App\Http\Controllers\AnesthesiaUnitController');
Route::resource('aunit', 'App\Http\Controllers\AAnesthesiaUnitController');


Route::get('/home', function () {
    return view('home');
});
