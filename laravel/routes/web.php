<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DigitalProductsController;
use App\Http\Controllers\LaptopsController;
use App\Http\Controllers\tabletsController;
use App\Http\Controllers\camerasController;
use App\Http\Controllers\TvsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route :: get('/DigitalProducts',function(){
//     return view('DigitalProducts');
// });
Route :: get('/DigitalProducts',[DigitalProductsController::class,'DigitalProducts']);
Route :: get('/DigitalProducts/create',[DigitalProductsController::class,'create']);
Route :: post('/DigitalProducts/addDigitalProducts',[DigitalProductsController::class,'addDigitalProducts']);

//edame compare
Route::get('/DigitalProducts/compare', [DigitalProductsController::class, 'compare'])->name('DigitalProducts.compare');


Route :: get('/Laptops',[LaptopsController::class,'Laptops']);
Route :: get('/Laptops/create1',[LaptopsController::class,'create1']);
Route :: post('/Laptops/addLaptops',[LaptopsController::class,'addLaptops']);

//edame compare
Route::get('/Laptops/compare', [LaptopsController::class, 'compare'])->name('Laptops.compare');




Route::get('/tablets',[tabletsController::class,'tablets']);
Route::get('/tablets/create2',[tabletsController::class,'create2']);
Route::post('/tablets/addtablets',[tabletsController::class,'addtablets']);

//edame compare
Route::get('/tablets/compare', [tabletsController::class, 'compare'])->name('tablets.compare');



Route::get('/cameras',[camerasController::class,'cameras']);
Route::get('/cameras/create3',[camerasController::class,'create3']);
Route::post('/cameras/addcameras',[camerasController::class,'addcameras']);

//edame compare
Route::get('/cameras/compare', [CamerasController::class, 'compare'])->name('cameras.compare');


Route::get('/Tvs',[TvsController::class,'Tvs']);
Route::get('/Tvs/create4',[TvsController::class,'create4']);
Route::post('/Tvs/addTvs',[TvsController::class,'addTvs']);

//edame compare
Route::get('/Tvs/compare', [TvsController::class, 'compare'])->name('Tvs.compare');


