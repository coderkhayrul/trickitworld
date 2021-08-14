<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CustromAdsController;
use App\Http\Controllers\Backend\GiveawayController;
use App\Http\Controllers\Backend\PageSettingController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\LanguageController;
use Illuminate\Support\Facades\Auth;
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

// |========================================================================================|
// *--------------------------------- FRONTEND ROUTE LIST START ----------------------------*
// |========================================================================================|
// Product Search Route
Route::post('/search', [FrontendController::class, 'productSearch'])->name('product.search');

// Multi Language Route List
Route::get('/language/english/', [LanguageController::class, 'English'])->name('english.language');
Route::get('/language/bangla/', [LanguageController::class, 'Bangla'])->name('bangla.language');

// INCLUDE ROUTE LIST
Route::get('/', [FrontendController::class, 'index'])->name('home.page');
Route::get('/contact', [FrontendController::class, 'homeContact'])->name('home.contact');
Route::get('/about', [FrontendController::class, 'homeAbout'])->name('home.about');
Route::get('/copyright', [FrontendController::class, 'homeCopyright'])->name('home.copyright');
Route::get('/privacy', [FrontendController::class, 'homePrivacy'])->name('home.privacy');
Route::get('/terms', [FrontendController::class, 'homeTerms'])->name('home.terms');

Route::get('/post/{slug}',  [FrontendController::class, 'homeProductShow'])->name('home.product.show');
Route::get('/category/{slug}',  [FrontendController::class, 'categoryPostShow'])->name('home.category.post.show');

// Sent Message System Route
Route::post('/sent',  [FrontendController::class, 'sentMessage'])->name('sent.message');

// |========================================================================================|
// *--------------------------------- FRONTEND ROUTE LIST END ----------------------------*
// |========================================================================================|

// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

// |========================================================================================|
// *--------------------------------- BACKEND ROUTE LIST START -----------------------------*
// |========================================================================================|

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // ADMIN CATEGORY ROUTES
    Route::resource('category', CategoryController::class);

    // ADMIN PRODUCT ROUTES
    Route::resource('product', ProductController::class);
    Route::post('product/image/update/{id}', [ProductController::class, 'productImageUpdate'])->name('product.image');

    Route::get('/status/active/{id}', [ProductController::class, 'productStatusEnable'])->name('product.enable');
    Route::get('/status/inactive/{id}', [ProductController::class, 'productStatusDisable'])->name('product.disable');

    // ADMIN SETTING ROUTES
    Route::prefix('setting')->group(function () {

        Route::get('/index', [AdminController::class, 'setting'])->name('setting.index');
        Route::post('/update/{id}', [AdminController::class, 'settingUpdate'])->name('admin.setting.update');
        Route::get('/social', [AdminController::class, 'settingSocial'])->name('admin.setting.social');
        Route::post('/social/update/{id}', [AdminController::class, 'settingSocialUpdate'])->name('setting.social.update');
        Route::get('/seo', [AdminController::class, 'settingSeo'])->name('admin.setting.seo');
        Route::post('/seo/update/{id}', [AdminController::class, 'settingSeoUpdate'])->name('setting.seo.update');
        Route::get('/contact', [AdminController::class, 'settingContact'])->name('admin.setting.contact');
        Route::post('/contact/update/{id}', [AdminController::class, 'settingContactUpdate'])->name('setting.contact.update');
    });

    // ADMIN SETTING ROUTES
    Route::resource('profile', ProfileController::class);
    Route::post('/image/update', [ProfileController::class, 'profileImageUpdate'])->name('admin.profile.image.update');

    // Custrom Ads Setting
    Route::resource('/ads', CustromAdsController::class);

    // Custrom Page Setting
    Route::resource('/page', PageSettingController::class);

    // Contact All Message
    Route::get('/contact', [AdminController::class, 'getAllContact'])->name('all.contact');
    Route::get('/contact/destroy/{id}', [AdminController::class, 'destroyContact'])->name('contact.destroy');
    Route::get('/contact/show/{id}', [AdminController::class, 'showContact'])->name('contact.show');
});

// |========================================================================================|
// *--------------------------------- BACKEND ROUTE END ----------------------------------*
// |========================================================================================|
