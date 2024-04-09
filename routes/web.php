<?php



namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
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
    return view('login');
});
Route::get('/main', [WelcomeController::class,'index'
])->name('welcome.index');
Route::get('/e-parking', [EparkingController::class,'index'
])->name('eparking.index');
Route::get('/tarkTee', [TarkTeeController::class,'index'
])->name('tarkTee.index');
Route::get('/eventLog', [EventLogController::class,'index'
])->name('eventLog.index');
Route::get('/login', [LoginController::class,'index'
])->name('login.index');
Route::get('/profile', [ProfileController::class,'index'
])->name('profile.index');


