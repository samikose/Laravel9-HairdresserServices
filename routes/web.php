<?php

use App\Http\Controllers\AdminPanel\AcceptedController;
use App\Http\Controllers\AdminPanel\AdminServiceController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\AppointmentController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\CompletedController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//1- Do something in route
Route::get('/hello',function (){
    return 'Hello World';
});

//2- Call view in route
Route::get('/welcome', function () {
    return view('welcome');
});

// ******************************** HOME PAGE ROUTES ***********************
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/service',[HomeController::class,'service'])->name('service');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/appointment',[HomeController::class,'appointment'])->name('appointment');
Route::get('/references',[HomeController::class,'references'])->name('references');
Route::post('/storemessage',[HomeController::class,'storemessage'])->name('storemessage');
Route::get('/faq',[HomeController::class,'faq'])->name('faq');
Route::post('/storecomment',[HomeController::class,'storecomment'])->name('storecomment');
Route::post('/storeappointment',[HomeController::class,'storeappointment'])->name('storeappointment');


Route::view('/loginuser','home.login')->name('loginuser');;
Route::view('/registeruser','home.register')->name('registeruser');;
Route::get('/logoutuser', [HomeController::class,'logout'])->name('logoutuser');
Route::view('/loginadmin','admin.login')->name('loginadmin');;
Route::post('/loginadmincheck', [HomeController::class,'loginadmincheck'])->name('loginadmincheck');


//4- Route-> Controller->View
Route::get('/test',[HomeController::class,'test'])->name('test');

//5- Route with parameters
Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');

//6- Route with post
Route::post('/save',[HomeController::class,'save'])->name('save');
Route::get('/servicedetail/{id}',[HomeController::class,'servicedetail'])->name('servicedetail');
Route::get('/categoryservices/{id}/{slug}',[HomeController::class,'categoryservices'])->name('categoryservices');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ******************************** USER AUTH CONTROL ***********************
Route::middleware('auth')->group(function () {
// ******************************** USER PANEL ROUTES ***********************
Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function () {
    Route::get('/','index')->name('index');
    Route::get('/reviews','reviews')->name('reviews');
    Route::get('/reviewdestroy/{id}', 'reviewdestroy')->name('reviewdestroy');
    Route::get('/appointments','appointments')->name('appointments');
    Route::get('/appointmentdestroy/{id}', 'appointmentdestroy')->name('appointmentdestroy');

});

// ******************************** ADMIN PANEL ROUTES ***********************
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
    // ******************************** General ROUTES ***********************
    Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
    Route::post('/setting', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');
// ******************************** ADMIN CATEGORY ROUTES ***********************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });

    // ******************************** ADMIN SERVICE ROUTES ***********************
    Route::prefix('/service')->name('service.')->controller(AdminServiceController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });

    // ******************************** ADMIN SERVICE IMAGE GALLERY ROUTES ***********************
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{sid}', 'index')->name('index');
        Route::post('/store/{sid}', 'store')->name('store');
        Route::get('/destroy/{sid}/{id}', 'destroy')->name('destroy');
    });

    // ******************************** ADMIN MESSAGE ROUTES ***********************
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });

    // ******************************** ADMIN FAQ  ROUTES ***********************
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });

    // ******************************** ADMIN COMMENT ROUTES ***********************
    Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });

    // ******************************** ADMIN NEW APPOINTMENT ROUTES ***********************
    Route::prefix('/newappointment')->name('newappointment.')->controller(AppointmentController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });

    // ******************************** ADMIN ACCEPTED APPOINTMENT ROUTES ***********************
    Route::prefix('/acceptedappointment')->name('acceptedappointment.')->controller(AcceptedController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });

    // ******************************** ADMIN COMPLETED APPOINTMENT ROUTES ***********************
    Route::prefix('/completedappointment')->name('completedappointment.')->controller(CompletedController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });

    // ******************************** ADMIN USER ROUTES ***********************
    Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::post('/addrole/{id}', 'addrole')->name('addrole');
        Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');


        });
    });
});

