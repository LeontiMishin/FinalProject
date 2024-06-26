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
])->middleware('auth')->name('eparking.index');
Route::get('/tarkTee', [TarkTeeController::class,'index'
])->middleware('auth')->name('tarkTee.index');
Route::get('/eventLog', [EventLogController::class,'index'
])->middleware('auth')->name('eventLog.index');
Route::post('/cars/add', [EventLogController::class, 'addCar'])->name('cars.add');
Route::post('/cars/delete/{id}', [EventLogController::class, 'delete'])->name('cars.delete');


Route::get('/profile', [ProfileController::class,'index'
])->middleware('auth')->name('profile.index');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');


Route::get('/addParkimisluba', [AddParkimislubaController::class,'index'
])->middleware('auth')->name('addParkimisluba.index');
Route::post('/submit', [AddParkimislubaController::class, 'store'])->name('submit');
Route::post('/delete-ticket/{id}', [AddParkimislubaController::class, 'destroy']);




Route::get('/main', 'App\Http\Controllers\WelcomeController@index');
Route::get('/news/{id}', [WelcomeController::class, 'show']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('/adminPanel', [AdminPanelController::class, 'index'])->middleware('guest')->name('adminPanel');
Route::get('/adminPanel/news', [AdminPanelNewsController::class, 'index'])->middleware('guest')->name('adminPanelNews');
Route::delete('/adminPanel/news/{id}', [AdminPanelNewsController::class, 'destroy']);
Route::post('/adminPanel/news/add', [AdminPanelNewsController::class, 'store']);

Route::get('/adminPanel/parkimisluba', [AdminPanelParkimislubaController::class, 'index'])->middleware('guest')->name('adminPanelNews');
Route::post('/submit1', [AdminPanelParkimislubaController::class, 'store'])->name('submit1');

Route::get('/adminPanel/autod', [AdminPanelAutodController::class, 'index'])->middleware('guest')->name('adminPanelNews');
Route::get('/adminPanel/users', [AdminPanelUsersController::class, 'index'])->middleware('guest')->name('adminPanelNews');
Route::delete('/delete-user/{id}', [AdminPanelUsersController::class, 'destroy']);

