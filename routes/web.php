<?php

use App\Http\Controllers\obtieneInfoController;
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

Route::get('obtieneDato', function () {
    return 'Aver';
})->name('obtieneDato');
*/


Route::get('/', function () {
    return view('indexADA');
});

Route:: post('indexADA', [obtieneInfoController::class, 'obtieneDato'] ) -> name('onichan'); 
