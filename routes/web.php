<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaleController;
use Faker\Guesser\Name;
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
    return view('welcome');
});

/* Drivers Group Routes------START*/

Route::group(['prefix' => '/driver'],function(){
Route::get('/', [DriverController::class, 'index'])->name('driver.index');
Route::get('create', [DriverController::class, 'create'])->name('driver.create');
Route::post('/', [DriverController::class, 'store'])->name('driver.store');
Route::get('{driver}/edit', [DriverController::class, 'edit'])->name('driver.edit');
Route::put('{driver}/update', [DriverController::class, 'update'])->name('driver.update');
Route::delete('{driver}/delete', [DriverController::class, 'delete'])->name('driver.delete');

});

/* Drivers Group Routes------END*/


/*Factories Group Routes-----START*/

Route::get('/factories/master', [FactoryController::class, 'master'])->name('factories.master');
Route::get('factories/create', [FactoryController::class, 'create'])->name('factories.create');
Route::post('factories', [FactoryController::class, 'store'])->name('factories.store');
Route::get('factories/{factory}/edit', [FactoryController::class, 'edit'])->name('factories.edit');
Route::put('factories/{factory}/update', [FactoryController::class, 'update'])->name('factories.update');
Route::get('factories/{factory}/delete', [FactoryController::class, 'delete'])->name('factories.delete');

/*Factories Group Routes-----END*/

/* Sales Group Routes-----START*/

Route::get('sales/master', [SaleController::class, 'master'])->name('sales.master');
Route::get('sales/create', [SaleController::class, 'create'])->name('sales.create');
Route::post('sales/store', [SaleController::class, 'store'])->name('sales.store');
Route::get('sales/{sale}/edit', [SaleController::class, 'edit'])->name('sales.edit');
Route::put('sales/{sale}/update', [SaleController::class, 'update'])->name('sales.update');
Route::get('sales/{sale}/delete', [SaleController::class, 'delete'])->name('sales.delete');

/* Sales Group Routes-----END*/


/*Payments Group Routes----- START-------*/

Route::get('sales/{sale}/payment', [PaymentController::class, 'payment'])->name('sales.payment');
Route::get('sales/{sale}/payments', [PaymentController::class, 'payments'])->name('sales.payments');
Route::post('sales/payment', [PaymentController::class, 'storePayment'])->name('sales.payment.store');
Route::get('payments/{payment}/edit', [PaymentController::class, 'edit'])->name('sales.payments.edit');
Route::post('payments/update', [PaymentController::class, 'update'])->name('sales.payments.update');

/* Payments Group Routes----- END-------*/

Route::get('/blog/{id}', function(string $id){
    if($id){
        return "<h1>Post ID : $id</h1>";
    }else{
        return "<h1>NO Id found</h1>";
    }
})->whereNumber('id');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
