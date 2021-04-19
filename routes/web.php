<?php

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
Route::get('/', [\App\Http\Controllers\HomeController::class,'home']);
Route::get('/contacts', [\App\Http\Controllers\HomeController::class,'contacts']);
Route::get('/interior', [\App\Http\Controllers\HomeController::class,'interior']);
Route::get('/questionnaires', [\App\Http\Controllers\HomeController::class,'questionnaires']);
Route::get('/services', [\App\Http\Controllers\HomeController::class,'services']);
Route::get('/stocks', [\App\Http\Controllers\HomeController::class,'stocks']);
//indexRoute::post('/', [\App\Http\Controllers\HomeController::class,'store']);
//Route::get('/test', [\App\Http\Controllers\HomeController::class,'test']);

Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.',
        //'middleware' => ['auth']
    ],
    function (){
        Route::get('export/', [\App\Http\Controllers\API\OrderController::class,'export']);
        Route::get('{vue?}', function () {
            return view('admin.index');
        })->where('vue', '.*');
    }
);


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
