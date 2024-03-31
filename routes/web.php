<?php

use App\Http\Controllers\loyC;
use App\Http\Controllers\posC;
use App\Http\Controllers\billingC;
use App\Http\Controllers\paymentC;
use App\Http\Controllers\LoyaltyCon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoyaltyController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaymentGatewayController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('loyalty',[loyC::class, 'loy']);

Route::get('billing',[billingC::class, 'bill']);


 //LOYALTY
 Route::get('loyalty',[LoyaltyCon::class,'index']);

 
Route::middleware(['auth', 'verified'])->group(function(){
    //PLACE YOUR ROUTES HERE FOR VERIFIED USER


    //APPS
    Route::get('apps-todolist', [HomeController::class, 'todolist']);



   
  
    

});


require __DIR__.'/auth.php';

Route::get('/pointofsale',[posC::class, 'pos']);

Route::get('/payment',[paymentC::class, 'pay']);