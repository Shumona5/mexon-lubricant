<?php

use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\Backend\ChangePassword;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ForgetPasswordController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\TeamsController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController as ControllersCustomerController;
use App\Http\Controllers\DeliveryManController;
use App\Http\Controllers\Frontend\AutoController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\IndustrialController;
use App\Http\Controllers\Frontend\ProductController as FrontendProductController;
use App\Http\Controllers\LocationController as ControllersLocationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'home'])->name('web.home');
Route::get('/products',[FrontendProductController::class,'list'])->name('products.list');

Route::get('/auto',[AutoController::class,'auto'])->name('products.auto');
Route::get('/auto/motorbike',[AutoController::class,'motorbike'])->name('products.motorbike');
Route::get('/auto/gasoline',[AutoController::class,'gasoline'])->name('products.gasoline');
Route::get('/auto/diesel',[AutoController::class,'diesel'])->name('products.diesel');

Route::get('/industrial',[IndustrialController::class,'industrial'])->name('products.industrial');
Route::get('/industrial/diesel',[IndustrialController::class,'diesel'])->name('product.diesel');
Route::get('/industrial/grease',[IndustrialController::class,'grease'])->name('products.grease');

Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::get('/contact-us',[ContactController::class,'list'])->name('contact.list');
Route::get('/contact-us/store',[ContactController::class,'store'])->name('contactUs.store');








Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login/post', [LoginController::class, 'loginPost'])->name('login.post');

// Forget pass
Route::get('/forget/password', [ForgetPasswordController::class, 'forgetPassword'])->name('admin.forget.password');
Route::post('/forget/password/post', [ForgetPasswordController::class, 'forgetPasswordPost'])->name('admin.forget.password.post');
Route::get('/reset-password/{token}', [ForgetPasswordController::class, 'resetPassword'])->name('admin.reset.password');
Route::post('/reset-password/{token}', [ForgetPasswordController::class, 'resetPasswordPost'])->name('admin.reset.password.post');


Route::group(['middleware' => ['auth']], function () {

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    });


    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [UserController::class, 'list'])->name('user.list');
        Route::get('/view/{id}', [UserController::class, 'view'])->name('user.profile');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/store', [UserController::class, 'store'])->name('user.store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::get('/block/{id}', [UserController::class, 'block'])->name('user.block');
        Route::get('/unblock/{id}', [UserController::class, 'unblock'])->name('user.unblock');
        Route::get('/change-password', [ChangePassword::class, 'changePassword'])->name('changePassword');
        Route::post('/change-password', [ChangePassword::class, 'changePasswordProcess'])->name('change.password.process');
    });

    Route::group(['prefix' => 'settings'], function () {
        Route::get('/', [SettingController::class, 'show'])->name('settings');
        Route::put('/update', [SettingController::class, 'settings'])->name('settings.update');
    });


    Route::group(['prefix' => 'roles'], function () {
        Route::get('/', [RoleController::class, 'index'])->name('role.list');
        Route::get('/create', [RoleController::class, 'create'])->name('role.create');
        Route::post('/store', [RoleController::class, 'store'])->name('role.store');
        Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
        Route::post('/update/{id}', [RoleController::class, 'update'])->name('role.update');
        Route::get('/delete/{id}', [RoleController::class, 'delete'])->name('role.delete');
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('/', [ProductController::class, 'list'])->name('product.list');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/store', [ProductController::class, 'store'])->name('product.store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('/update/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
    });


   

    Route::group(['prefix' => 'sliders'], function () {
        Route::get('/', [SliderController::class, 'list'])->name('slider.list');
        Route::get('/create', [SliderController::class, 'create'])->name('slider.create');
        Route::post('/store', [SliderController::class, 'store'])->name('slider.store');
        Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
        Route::put('/update/{id}', [SliderController::class, 'update'])->name('slider.update');
        Route::get('/delete/{id}', [SliderController::class, 'delete'])->name('slider.delete');
    });

    Route::group(['prefix' => 'customer'], function () {
        Route::get('/', [ControllersCustomerController::class, 'list'])->name('customer.list');
        Route::get('/create', [ControllersCustomerController::class, 'create'])->name('customer.create');
        Route::post('/store', [ControllersCustomerController::class, 'store'])->name('customer.store');
        Route::get('/edit/{id}', [ControllersCustomerController::class, 'edit'])->name('customer.edit');
        Route::put('/update/{id}', [ControllersCustomerController::class, 'update'])->name('customer.update');
        Route::get('/view/{id}', [ControllersCustomerController::class, 'view'])->name('customer.view');
        Route::get('/delete/{id}', [ControllersCustomerController::class, 'delete'])->name('customer.delete');
        Route::get('/export', [ControllersCustomerController::class, 'excelExport'])->name('customer.export');
    });

    

   
    
    
   
    

    
});
