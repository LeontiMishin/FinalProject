<?php



namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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
])->middleware('auth')->name('welcome.index');

Route::get('/e-parking', [EparkingController::class,'index'
])->name('eparking.index');
Route::get('/tarkTee', [TarkTeeController::class,'index'
])->name('tarkTee.index');
Route::get('/eventLog', [EventLogController::class,'index'
])->name('eventLog.index');
Route::get('/profile', [ProfileController::class,'index'
])->name('profile.index');
Route::get('/addParkimisluba', [AddParkimislubaController::class,'index'
])->name('addParkimisluba.index');

Route::get('/main', 'App\Http\Controllers\WelcomeController@index');

Route::get('/news/{id}', [WelcomeController::class, 'show']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');
