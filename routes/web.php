<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vehicleController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\DashboardController;

//Main Page
Route::get('/', function () {
    return view('login');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Auth & Dashbard
Route::get('/dashboard', [DashboardController::class ,'index' ])->middleware(['auth', 'verified'])->name('dashboard');
//Profile Editior
    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//All vehicle Things
Route::get('/vehicle', [vehicleController::class ,'index' ])->name('vehicle.index');
Route::get('/vehicle/add', [vehicleController::class ,'add' ])->name('vehicle.add');
Route::post('/vehicle', [vehicleController::class ,'store' ])->name('vehicle.store');
Route::get('/vehicle/{vehicle}/edit', [vehicleController::class ,'edit' ])->name('vehicle.edit');
Route::put('/vehicle/{vehicle}', [vehicleController::class ,'update' ])->name('vehicle.update');
Route::delete('/vehicle/{vehicle}', [vehicleController::class ,'destroy' ])->name('vehicle.destroy');
//All Driver Things
Route::get('/Driver', [DriverController::class ,'index' ])->name('Driver.index');
Route::get('/Driver/add', [DriverController::class ,'add' ])->name('Driver.add');
Route::post('/Driver', [DriverController::class ,'store' ])->name('Driver.store');
Route::get('/Driver/{Driver}/edit', [DriverController::class ,'edit' ])->name('Driver.edit');
Route::put('/Driver/{Driver}', [DriverController::class ,'update' ])->name('Driver.update');
Route::delete('/Driver/{Driver}', [DriverController::class ,'destroy' ])->name('Driver.destroy');
//All customer Things
Route::get('/customer', [customerController::class ,'index' ])->name('customer.index');
Route::get('/customer/add', [customerController::class ,'add' ])->name('customer.add');
Route::post('/customer', [customerController::class ,'store' ])->name('customer.store');
Route::get('/customer/{customer}/edit', [customerController::class ,'edit' ])->name('customer.edit');
Route::put('/customer/{customer}', [customerController::class ,'update' ])->name('customer.update');
Route::delete('/customer/{customer}', [customerController::class ,'destroy' ])->name('customer.destroy');
//All Routes Things
Route::get('/Routes', [RoutesController::class ,'index' ])->name('Routes.index');
Route::get('/Routes/add', [RoutesController::class ,'add' ])->name('Routes.add');
Route::post('/Routes', [RoutesController::class ,'store' ])->name('Routes.store');
Route::get('/Routes/{Routes}/edit', [RoutesController::class ,'edit' ])->name('Routes.edit');
Route::put('/Routes/{Routes}', [RoutesController::class ,'update' ])->name('Routes.update');
Route::delete('/Routes/{Routes}', [RoutesController::class ,'destroy' ])->name('Routes.destroy');
//All Trips Things
Route::get('/Trip', [TripController::class ,'index' ])->name('Trip.index');
Route::get('/Trip', [TripController::class ,'dropDownShow' ])->name('Trip.dropDownShow');
Route::get('/OnGoingTrip', [TripController::class ,'OnGoing' ])->name('Trip.OnGoing');
Route::get('/CloseTrip', [TripController::class ,'Close' ])->name('Trip.Close');
Route::post('/Trip', [TripController::class ,'store' ])->name('Trip.store');
Route::get('/Trip/{Trip}/edit', [TripController::class ,'edit' ])->name('Trip.edit');
Route::put('/Trip/{Trip}', [TripController::class ,'update' ])->name('Trip.update');
Route::get('/Trip/{Trip}/View', [TripController::class ,'View' ])->name('Trip.View');
Route::get('/Trip/{Trip}/Print', [TripController::class ,'Print' ])->name('Trip.Print');
//Logout
Route::get('logout', function () {
    return view('login');
});
require __DIR__.'/auth.php';