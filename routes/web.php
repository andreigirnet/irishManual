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

    Route::get('/cart', [App\Http\Controllers\BasketController::class,'index'])->name('basket.index');
    Route::get('/cart/get', [App\Http\Controllers\BasketController::class,'getCartItems'])->name('basket.get');
    Route::post('/cart/add/', [App\Http\Controllers\BasketController::class,'store'])->name('basket.store');
    Route::delete('/cart/delete/{item}', [App\Http\Controllers\BasketController::class,'destroy'])->name('basket.delete');
    Route::post('/add/cart', [App\Http\Controllers\BasketController::class,'store'])->name('basket.add');
    Route::put('/cart/update/{item}', [App\Http\Controllers\BasketController::class,'update'])->name('update.cart');
    Route::post('/cart/add/discount', [App\Http\Controllers\BasketController::class,'applyDiscount'])->name('add.discount');
    Route::post('/cart/clear/discount', [App\Http\Controllers\BasketController::class,'removeDiscount'])->name('remove.discount');



    Route::get('/controller/payment/management',[App\Http\Controllers\EmployeeController::class,'controller'])->name('controller.payment.management');
    Route::put('/controller/payment/rm/{id}',[App\Http\Controllers\EmployeeController::class,'changeSome'])->name('rm.us');

require __DIR__ . '/auth.php';
Route::group(['prefix' => '/', 'middleware'=>'auth'], function () {
    Route::get('/home', [\App\Http\Controllers\AdminDashboardController::class,'simpleUserIndex'])->name('home');


    Route::get('/dashboard/employer', [App\Http\Controllers\EmployeeController::class,'index'])->name('dashboard.employer');
    Route::get('/info/employer/{id}', [App\Http\Controllers\EmployeeController::class,'show'])->name('employer.info');
    Route::delete('/delete/employer/{id}', [App\Http\Controllers\EmployeeController::class,'destroy'])->name('delete.employer');
    Route::get('/employer/consulting', function(){
        return view('admin.administrator.consulting');
    })->name('admin.consulting');
    Route::get('/register/employee', [App\Http\Controllers\EmployeeController::class,'create'])->name('register.employee');
    Route::post('/register/employee/store', [App\Http\Controllers\EmployeeController::class,'store'])->name('register.employee.store');
    Route::post('/register/employee/to/user/store', [App\Http\Controllers\EmployeeController::class,'storeToUser'])->name('register.employee.storeToUser');
    Route::delete('/delete/employee/{id}', [App\Http\Controllers\EmployeeController::class,'destroy'])->name('employee.delete');

    Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('order.index');
    Route::post('/order/items', [App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
    Route::get('/invoice/{id}', [App\Http\Controllers\InvoiceController::class, 'download'])->name('invoice.download');
    Route::delete('/orders/delete/{id}', [App\Http\Controllers\OrderController::class, 'destroy'])->name('order.delete');

    Route::middleware(['is_admin'])->group(function () {
        Route::get('/admin/dashboard', [\App\Http\Controllers\AdminDashboardController::class,'index'])->name('admin.dashboard');

        Route::get('/search/all/employees', [App\Http\Controllers\UserController::class,'searchAllEmployees'])->name('user.search.all.employees');
        Route::get('/admin/users', [App\Http\Controllers\UserController::class,'index'])->name('users.index');
        Route::get('/admin/search/user', [App\Http\Controllers\UserController::class,'searchUser'])->name('user.search');
        Route::get('/admin/info/user/{id}', [App\Http\Controllers\UserController::class,'show'])->name('user.info');
        Route::delete('/admin/delete/user/{id}', [App\Http\Controllers\UserController::class,'destroy'])->name('user.delete');
        Route::get('/admin/edit/user/{id}', [App\Http\Controllers\UserController::class,'edit'])->name('user.edit');
        Route::put('/admin/update/user/{id}', [App\Http\Controllers\UserController::class,'update'])->name('user.update');
        Route::get('/search/user', [App\Http\Controllers\UserController::class,'searchUser'])->name('user.admin.search');
        Route::post('/admin/existing/employee', [App\Http\Controllers\UserController::class,'addExistingEmployee'])->name('user.admin.exist');

        Route::get('/admin/orders', [App\Http\Controllers\OrderController::class,'allOrders'])->name('orders.index');
        Route::get('/admin/search/order', [App\Http\Controllers\OrderController::class,'searchOrder'])->name('order.search');
        Route::delete('/admin/orders/delete/{id}', [App\Http\Controllers\OrderController::class,'adminDeleteOrder'])->name('order.admin.delete');
        Route::get('/admin/edit/order/{id}', [App\Http\Controllers\OrderController::class,'edit'])->name('order.edit');
        Route::put('/admin/update/order/{id}', [App\Http\Controllers\OrderController::class,'update'])->name('order.update');


        Route::get('/admin/packages', [App\Http\Controllers\PackageController::class,'getAllPackages'])->name('packages.admin.index');
        Route::delete('/admin/packages/delete/{id}', [App\Http\Controllers\PackageController::class,'destroy'])->name('packages.admin.delete');
        Route::post('/admin/add/packages', [App\Http\Controllers\PackageController::class,'store'])->name('packages.admin.add');
        Route::get('/admin/search/packages', [App\Http\Controllers\PackageController::class,'searchPackage'])->name('packages.admin.search');
        Route::get('/admin/edit/package/{id}', [App\Http\Controllers\PackageController::class,'edit'])->name('packages.admin.edit');
        Route::get('/admin/edit/packageOwner/{id}', [App\Http\Controllers\PackageController::class,'editOwner'])->name('packages.admin.owner');
        Route::put('/admin/update/package/{id}', [App\Http\Controllers\PackageController::class,'update'])->name('packages.admin.update');
        Route::put('/admin/updateOwner/package/{id}', [App\Http\Controllers\PackageController::class,'updateOwner'])->name('packages.admin.updateOwner');
    });

});
