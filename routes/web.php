<?php

use App\Http\Controllers\Business_SettingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\Frontend_User_LoginController;
use App\Http\Controllers\frontend\UserRegistrationController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\CustomerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Property_typeController;
use App\Http\Controllers\AgentController;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\SheduleController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\frontend\AboutusController;
use App\Http\Controllers\frontend\ShowController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use App\Models\Customer;
use App\Models\User;

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
//for frontend.........frontend...........frontend........frontend.....
//for frontend.........frontend...........frontend........frontend.....
//frontend home mage.......
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/all-products',[HomeController::class,'allproducts'])->name('website.all-products');

//seachin work..............................................................................
Route::get('/search',[HomeController::class,'search'])->name('search');

//project show...................................................................................
Route::get('/project-show/{id}',[HomeController::class,'projectshow'])->name('project.show');

//our ongoing for frontend............................................................
Route::get('/ongoingproject-show/{id}',[HomeController::class,'ongoingprojectshow'])->name('ongoingproject.show');

//frontend user login.................................................................
Route::get('/user/login',[HomeController::class,'user'])->name('user.login');
Route::post('/user/dologin',[CustomerController::class,'dologin'])->name('user.dologin');





//middle ware for booking .....................................................................
Route::group(['middleware'=>'frontendauth'],function(){
   
    Route::get('/Booking/create/{id}', [BookingController::class,'Bookingnew'])->name('Booking.create');
    Route::get('/user/logout',[CustomerController::class,'userlogout'])->name('user.logout');

//user profile
    Route::get('/user/profile',[HomeController::class,'userProfile'])->name('user.login.profile');
    
    //baksh route
    
});




//user profile............................................................................
Route::get('/edit/profile', [CustomerController::class,'editprofile'])->name('edit.profile');
Route::put('/save-profile/{id}', [CustomerController::class,'saveprofile'])->name('customer.save.profile');

//frontend user login.....................................................................

Route::get('/user/registration',[HomeController::class,'registration'])->name('user.registration');
Route::post('/user/doregistration',[CustomerController::class,'doregistration'])->name('user.doregistration');






//frontend user conatct page route..........................................
Route::get('/user/contact',[ContactController::class,'contact'])->name('contact.us');
Route::get('/user/contact/backendtable',[ContactController::class,'backendcontact'])->name('backend.contact.us');
Route::post('/user/contact/store',[ContactController::class,'frontendcontactstore'])->name('frontend.contact.us.store');

Route::get('/user/contact/backendtable/delet/{id}',[ContactController::class,'delete'])->name('backend.contact.delete');

// Route::post('/user/send-message',[ContactController::class,'sendmail'])->name('conatct.sent');


//About us page......................................................................
Route::get('/about-us',[AboutusController::class,'about'])->name('about.us');


//one table one route for upcoming/ongoing/complet.....................................................
Route::get('/projects/status/{type}', [ProjectController::class,'showproject'])->name('show.project.type');
Route::get('/showmore/Project/{id}',[ProjectController::class,'showmore'])->name('project.showmore');


//one table one route for upcoming/ongoing/complet..........................................................
Route::get('/property/status/{type}', [PropertyController::class,'showproperty'])->name('show.property.type');
Route::get('/view/Property/{id}',[PropertyController::class,'view'])->name('property.view');





Route::get('/admin/employee/profile',[UserController::class,'employeeprofile'])->name('employee.ptofile');
Route::get('/admin/employee/edite/profile',[UserController::class,'employeeediteprofile'])->name('employee.edite.ptofile');
Route::put('/employee/save-profile/{id}', [UserController::class,'saveprofile'])->name('save.profile');
//.......................................................................................

// usercreate
Route::get('admin/user/create',[UserController::class,'usercreate'])->name('user.create');
Route::post('/admin/user/login',[UserController::class,'userloginn'])->name('admin.user.login.form');
//......................................................................................

// Booking route
Route::get('/Booking', [BookingController::class,'Booking'])->name('Booking');
Route::post('/Booking-store', [BookingController::class,'Bookingstore'])->name('Booking.store');
// Route::get('/booking-dashboard', [BookingController::class,'showBookingDashboard']);
Route::get('/booking/delete/{id}',[BookingController::class,'delete'])->name('booking.delete');




//......................................................................................





//log in log out.....................................................................................
Route::get('/admin/login',[UserController::class,'login'])->name('admin.login');
Route::post('/admin/login/form',[UserController::class,'loginn'])->name('admin.login.form');
Route::post('/admin/logout',[UserController::class,'destroy'])->name('admin.logout.form');


//..................................Admin Prefix.......................................................
//..................................Admin Prefix.......................................................
//..................................Admin Prefix........................................................


//for backend............Admin..........................................................................
Route::get('/admin', function () {
    return view('master');
});
//group of route for admin....
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
//.....................................................................................

//dashboard route...
Route::get('/', [DashboardController::class,'dashboard'])->name('dashboard');

//.....................................................................................

//Business-setting route
Route::get('/Business_setting', [Business_SettingController::class,'Business_setting'])->name('Business.setting');

//......................................................................................


//.......................................................................................
//Project route
Route::get('/Project', [ProjectController::class,'Project'])->name('Project');
Route::get('/Project-create',[ProjectController::class,'Project_create'])->name('Project.create');
Route::post('/Project-store', [ProjectController::class,'projectstore'])->name('Project.store');

//delet/edit/update
Route::get('/project/delete/{id}',[ProjectController::class,'delete'])->name('project.delete');
Route::get('/project/edit/{id}',[ProjectController::class,'edit'])->name('project.edit');
Route::put('/project/update/{id}',[ProjectController::class,'update'])->name('project.update');

//......................................................................................

//.......................................................................................
//Property....(route)................
Route::get('/Property', [PropertyController::class,'Property'])->name('Property');
Route::get('/Property-create', [PropertyController::class,'create'])->name('Property.create');
Route::post('/Property-store', [PropertyController::class,'store'])->name('Property.store');
//delet/edit/update.................
Route::get('/property/delete/{id}',[PropertyController::class,'delete'])->name('property.delete');
Route::get('/property/edit/{id}',[PropertyController::class,'edit'])->name('property.edit');
Route::put('/property/update/{id}',[PropertyController::class,'update'])->name('property.update');
//......................................................................................


//.......................................................................................



//.......................................................................................
// Client route
Route::get('/Client', [CustomerController::class,'Client'])->name('Client');
Route::get('/Client/delet/{id}', [CustomerController::class,'delete'])->name('Client.delete');

//......................................................................................


//.......................................................................................
// Shedule route
Route::get('/Shedule', [SheduleController::class,'Shedule'])->name('Shedule');
Route::get('/Shedule/create', [SheduleController::class,'Shedulenew'])->name('Shedule.create');
//......................................................................................


//.......................................................................................
// Report route
Route::get('/Report', [ReportController::class,'Report'])->name('Report');
Route::get('/Reportall', [ReportController::class,'allReport'])->name('all');
Route::get('/report/search', [ReportController::class,'reportSearch'])->name('Report.search');


Route::get('/Reporbooking', [ReportController::class,'bookingReport'])->name('booking.report');
Route::get('/report/booking/search', [ReportController::class,'bokkingreportSearch'])->name('booking.Report.search');






//......................................................................................
});
