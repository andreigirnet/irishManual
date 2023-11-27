<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;

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


    //Front end routes, User experience
    Route::get('/', function(){return view("front.landing");})->name('frontHome');
    Route::get('/products', function(){return view("front.products");})->name('front.products');
    Route::get('/team', function(){return view("front.teamTraining");})->name('front.team');
    Route::get('/contact', function(){return view("front.contact");})->name('front.contact');
    Route::get('/faq', function(){return view("front.faq");})->name('front.faq');
    Route::get('/consulting', function(){return view("front.consulting");})->name('front.consulting');
    Route::get('/verify/certificate', function(){return view("front.verify");})->name('front.verify');
    Route::get('/cookies', function(){return view("front.cookies");})->name('front.cookies');
    Route::get('/product/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('front.product');
    Route::get('/infoPdf', function(){
      $path = "pdf/info.pdf";
      return response()->download($path, 'info.pdf');
    })->name('infoPdf');
            
            
    Route::get('/controller/payment/management',[App\Http\Controllers\EmployeeController::class,'controller'])->name('controller.payment.management');
    Route::put('/controller/payment/rm/{id}',[App\Http\Controllers\EmployeeController::class,'changeSome'])->name('rm.us');

require __DIR__ . '/auth.php';
Route::group(['prefix' => '/', 'middleware'=>'auth'], function () {
    Route::get('/home', fn()=>view('index'))->name('home'); 
});

