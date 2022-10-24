<?php
use App\Http\Controllers\StretcherController;
use App\Http\Controllers\AnesthesiaUnitController;
use App\Http\Controllers\OximeterController;
use App\Http\Controllers\InfusionPumpController;
use App\Http\Controllers\DefibrillatorController;
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


//STRETCHER
Route::get('stretcher/criteria', [StretcherController::class , 'criteria'])->name('stretcher.criteria');
Route::get('stretcher/select', [StretcherController::class , 'select'])->name('stretcher.select');
Route::get('stretcher/per1', [StretcherController::class, 'index1' ])->name('stretcher.per1');
Route::get('stretcher/per2', [StretcherController::class, 'index2'  ])->name('stretcher.per2');
Route::get('stretcher/per3', [StretcherController::class, 'index3'  ])->name('stretcher.per3');
Route::resource('stretcher', StretcherController::class);



//ANESTHESIA
Route::get('aunit/criteria', [AnesthesiaUnitController::class , 'criteria'])->name('aunit.criteria');
Route::get('aunit/select', [AnesthesiaUnitController::class , 'select'])->name('aunit.select');
Route::get('aunit/per1', [AnesthesiaUnitController::class, 'index1' ])->name('aunit.per1');
Route::get('aunit/per2', [AnesthesiaUnitController::class, 'index2'  ])->name('aunit.per2');
Route::get('aunit/per3', [AnesthesiaUnitController::class, 'index3'  ])->name('aunit.per3');
Route::resource('aunit', AnesthesiaUnitController::class);


//Oximeter
Route::get('oximeter/criteria', [OximeterController::class , 'criteria'])->name('oximeter.criteria');
Route::get('oximeter/select', [OximeterController::class , 'select'])->name('oximeter.select');
Route::get('oximeter/per1', [OximeterController::class, 'index1' ])->name('oximeter.per1');
Route::get('oximeter/per2', [OximeterController::class, 'index2'  ])->name('oximeter.per2');
Route::get('oximeter/per3', [OximeterController::class, 'index3'  ])->name('oximeter.per3');
Route::resource('oximeter', OximeterController::class);



//InfusionPump
Route::get('infusionpump/criteria', [InfusionPumpController::class , 'criteria'])->name('infusionpump.criteria');
Route::get('infusionpump/select', [InfusionPumpController::class , 'select'])->name('infusionpump.select');
Route::get('infusionpump/per1', [InfusionPumpController::class, 'index1' ])->name('infusionpump.per1');
Route::get('infusionpump/per2', [InfusionPumpController::class, 'index2'  ])->name('infusionpump.per2');
Route::get('infusionpump/per3', [InfusionPumpController::class, 'index3'  ])->name('infusionpump.per3');
Route::resource('infusionpump', InfusionPumpController::class);



//Defibrillator
Route::get('defibrillator/criteria', [DefibrillatorController::class , 'criteria'])->name('defibrillator.criteria');
Route::get('defibrillator/select', [DefibrillatorController::class , 'select'])->name('defibrillator.select');
Route::get('defibrillator/per1', [DefibrillatorController::class, 'index1' ])->name('defibrillator.per1');
Route::get('defibrillator/per2', [DefibrillatorController::class, 'index2'  ])->name('defibrillator.per2');
Route::get('defibrillator/per3', [DefibrillatorController::class, 'index3'  ])->name('defibrillator.per3');
Route::resource('defibrillator', DefibrillatorController::class);

Route::get('/home', function () {
    return view('home');
});
