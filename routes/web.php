<?php

use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\AutomotiveController;
use App\Http\Controllers\Backend\ChangePassword;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ForgetPasswordController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\TeamsController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\BusinessPromotionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController as ControllersCustomerController;
use App\Http\Controllers\DeliveryManController;
use App\Http\Controllers\EngineController;
use App\Http\Controllers\EngineOilController;
use App\Http\Controllers\Frontend\AutoController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\IndustrialController;
use App\Http\Controllers\Frontend\ProductController as FrontendProductController;
use App\Http\Controllers\GasolineController;
use App\Http\Controllers\HomePageImageController;
use App\Http\Controllers\LocationController as ControllersLocationController;
use App\Http\Controllers\MotorbikeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypesDetailsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SubProductTypesDetailsController;
use App\Http\Controllers\TransmissionController;
use App\Http\Controllers\WhyMexonController;
use App\Models\Category;
use App\Models\ProductsDetails;
use App\Models\ProductTypesDetails;
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

    //...............Frontend................ 

Route::get('/', [HomeController::class, 'home'])->name('web.home');
Route::get('/products',[FrontendProductController::class,'list'])->name('products.list');

Route::get('/auto',[AutoController::class,'auto'])->name('products.auto');
Route::get('/auto/motorbike',[AutoController::class,'motorbike'])->name('products.motorbike');
Route::get('/auto/gasoline',[AutoController::class,'gasoline'])->name('products.gasoline');
Route::get('/auto/diesel',[AutoController::class,'diesel'])->name('products.diesel');

Route::get('/industrial',[IndustrialController::class,'industrial'])->name('products.industrial');
Route::get('/industrial/diesel',[IndustrialController::class,'diesel'])->name('product.diesel');
Route::get('/industrial/grease',[IndustrialController::class,'grease'])->name('products.grease');

Route::get('/transmission',[TransmissionController::class,'transmission'])->name('products.transmission');
Route::get('/transmission/memox',[TransmissionController::class,'memox'])->name('transmission.memox');


Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::get('/contact-us',[ContactController::class,'list'])->name('contact.list');
Route::get('/contact-us/store',[ContactController::class,'store'])->name('contactUs.store');

Route::get('/engine',[EngineOilController::class,'list'])->name('engine.list');
Route::get('/engine/create',[EngineOilController::class,'create'])->name('engine.create');
Route::post('/engine/store',[EngineOilController::class,'store'])->name('engine.store');
Route::get('/engine/edit/{id}',[EngineOilController::class,'edit'])->name('engine.edit');
Route::put('/engine/update/{id}',[EngineOilController::class,'update'])->name('engine.update');
Route::get('/engine/delete/{id}',[EngineOilController::class,'delete'])->name('engine.delete');

//........................Backend...................

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
        Route::get('/edit', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('/update', [ProductController::class, 'update'])->name('product.update');
        Route::get('/delete', [ProductController::class, 'delete'])->name('product.delete');
        Route::get('/subProduct/create',[ProductController::class,'subProductCreate'])->name('subProduct.create');
        Route::post('/subProduct/store',[ProductController::class,'subProductStore'])->name('subProduct.store');
        Route::get('/subProduct/edit/{id}',[ProductController::class,'subProductEdit'])->name('subProduct.edit');
        Route::put('/subProduct/update/{id}',[ProductController::class,'subProductUpdate'])->name('subProduct.update');
        Route::get('/subProduct/delete/{id}',[ProductController::class,'subProductDelete'])->name('subProduct.delete');
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

    Route::get('/category',[CategoryController::class,'list'])->name('category.list');
    Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category/edit/{$slug}',[CategoryController::class,'edit'])->name('category.edit');
    Route::put('/category/update/{$slug}',[CategoryController::class,'update'])->name('category.update');
    Route::get('/category/delete/{$slug}',[CategoryController::class,'delete'])->name('category.delete');

    Route::get('/businessPromotion',[BusinessPromotionController::class,'list'])->name('businessPromotion.list');
    Route::get('/businessPromotion/create',[BusinessPromotionController::class,'create'])->name('businessPromotion.create');
    Route::post('/businessPromotion/store',[BusinessPromotionController::class,'store'])->name('businessPromotion.store');
    Route::get('/businessPromotion/edit/{id}',[BusinessPromotionController::class,'edit'])->name('businessPromotion.edit');
    Route::put('/businessPromotion/update/{id}',[BusinessPromotionController::class,'update'])->name('businessPromotion.update');
    Route::get('/businessPromotion/delete/{id}',[BusinessPromotionController::class,'delete'])->name('businessPromotion.delete');
    
    Route::get('/homeimage',[HomePageImageController::class,'edit'])->name('home.image');
    Route::get('/homeimage/create',[HomePageImageController::class,'create'])->name('home.image.create');
    Route::post('/homeimage/store',[HomePageImageController::class,'store'])->name('home.image.store');
    // Route::get('/homeimage/edit/{id}',[HomePageImageController::class,'edit'])->name('home.image.edit');
    Route::put('/homeimage/update',[HomePageImageController::class,'update'])->name('home.image.update');
   
    Route::get('/productTypes',[ProductTypesDetailsController::class,'list'])->name('products.type.list');
    Route::get('/productTypes/create',[ProductTypesDetailsController::class,'create'])->name('products.type.create');
    Route::post('/productTypes/store',[ProductTypesDetailsController::class,'store'])->name('products.type.store');
    Route::get('/productTypes/edit/{id}',[ProductTypesDetailsController::class,'edit'])->name('products.type.edit');
    Route::put('/productTypes/update/{id}',[ProductTypesDetailsController::class,'update'])->name('products.type.update');
    Route::get('/productTypes/delete/{id}',[ProductTypesDetailsController::class,'delete'])->name('products.type.delete');
   
    Route::get('/whymexon',[WhyMexonController::class,'editView'])->name('whyMexon.list');
    Route::put('/whymexon/update',[WhyMexonController::class,'createOrUpdate'])->name('whyMexon.update');

    Route::get('/productsSubtitle',[SubProductTypesDetailsController::class,'list'])->name('subProducts.details.list');
    Route::get('/productsSubtitle/create',[SubProductTypesDetailsController::class,'create'])->name('subProducts.details.create');
    Route::post('/productsSubtitle/store',[SubProductTypesDetailsController::class,'store'])->name('subProducts.details.store');
    Route::get('/productsSubtitle/edit/{id}',[SubProductTypesDetailsController::class,'edit'])->name('subProducts.details.edit');
    Route::put('/productsSubtitle/update/{id}',[SubProductTypesDetailsController::class,'update'])->name('subProducts.details.update');
    Route::get('/productsSubtitle/delete/{id}',[SubProductTypesDetailsController::class,'delete'])->name('subProducts.details.delete');
   
    Route::get('/motorbike',[MotorbikeController::class,'list'])->name('motorbike.list');
    Route::get('/motorbike/create',[MotorbikeController::class,'create'])->name('motorbike.create');
    Route::post('/motorbike/store',[MotorbikeController::class,'store'])->name('motorbike.store');
    Route::get('/motorbike/edit/{id}',[MotorbikeController::class,'edit'])->name('motorbike.edit');
    Route::put('/motorbike/update/{id}',[MotorbikeController::class,'update'])->name('motorbike.update');
    Route::get('/motorbike/delete/{id}',[MotorbikeController::class,'delete'])->name('motorbike.delete');
    
    Route::get('/gasoline',[GasolineController::class,'list'])->name('gasoline.list');
    Route::get('/gasoline/create',[GasolineController::class,'create'])->name('gasoline.create');
    Route::post('/gasoline/store',[GasolineController::class,'store'])->name('gasoline.store');
    Route::get('/gasoline/edit/{id}',[GasolineController::class,'edit'])->name('gasoline.edit');
    Route::put('/gasoline/update/{id}',[GasolineController::class,'update'])->name('gasoline.update');
    Route::get('/gasoline/delete/{id}',[GasolineController::class,'delete'])->name('gasoline.delete');


    
});
