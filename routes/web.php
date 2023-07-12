<?php

use App\Http\Controllers\Business_SettingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController as websiteProductController ;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Property_typeController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SheduleController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;



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

//for frontend

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/all-products',[HomeController::class,'allproducts'])->name('website.all-products');









//for backend
Route::get('/admin', function () {
    return view('master');
});

//log in log out....


Route::get('/admin/login',[UserController::class,'login'])->name('admin.login');
Route::post('/admin/login',[UserController::class,'loginn'])->name('admin.login.form');
Route::post('/admin/logout',[UserController::class,'destroy'])->name('admin.logout.form');



//.........................................................................................
//group of route....
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){





//.......................................................................................
//dashboard route...
Route::get('/', [DashboardController::class,'dashboard'])->name('dashboard');

//.......................................................................................
//category route....
Route::get('/categories', [CategoryController::class,'categories'])->name('categories');
Route::get('/category-create', [CategoryController::class,'create'])->name('category.create');
Route::post('/category-store', [CategoryController::class,'store'])->name('category.store');


Route::get('/category-edit',[CategoryController::class,'edit'])->name('category.edit');





//.......................................................................................
//product route

Route::get('/products', [ProductController::class,'products'])->name('products');
Route::get('/product-create', [ProductController::class,'create'])->name('product.create');
Route::post('/product-store', [ProductController::class,'store'])->name('product.store');
//......................................................................................


//.......................................................................................
//Business-setting route

Route::get('/Business_setting', [Business_SettingController::class,'Business_setting'])->name('Business.setting');

//......................................................................................


//.......................................................................................
//Project route
Route::get('/Project', [ProjectController::class,'Project'])->name('Project');

//......................................................................................

//.......................................................................................
//Property_type....(route)
Route::get('/Property_type', [Property_typeController::class,'Property_type'])->name('Property.type');

//......................................................................................

//.......................................................................................
//Property....(route)

Route::get('/Property', [PropertyController::class,'Property'])->name('Property');
//......................................................................................

//.......................................................................................
//Agent route
Route::get('/Agent', [AgentController::class,'Agent'])->name('Agent');

//......................................................................................



//.......................................................................................
// Client route
Route::get('/Client', [ClientController::class,'Client'])->name('Client');

//......................................................................................


//.......................................................................................
// Shedule route

Route::get('/Shedule', [SheduleController::class,'Shedule'])->name('Shedule');
//......................................................................................



//.......................................................................................
// Booking route
Route::get('/Booking', [BookingController::class,'Booking'])->name('Booking');

//......................................................................................



//.......................................................................................
// Report route
Route::get('/Report', [ReportController::class,'Report'])->name('Report');

//......................................................................................


//.......................................................................................
// Contact_us route


//......................................................................................

});
