<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\auth;
use app\http\Controllers\admin;
use App\traits\General;
// ============= Controller ==================
use App\Http\Controllers\admin\loginController;
use App\Http\Controllers\front\productController;
use App\Http\Controllers\front\cartController;
// use App\Http\Controllers\front\;
// ========= ajax ============
use App\Http\Controllers\offerController;
use App\Http\Controllers\front\userController;

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
// ############## Const variables ###########################
// All Constan variable in application is define in "/config/Constans.php "

##############################
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// }])->name('dashboard');
// Route::get('/','loginController::class,backhome'])->name('home');
// });
// ########################start Front Routes ####################################
Route::group(['middleware'=>'guest'],function(){

    Route::get('user-login',[userController::class,'user_login'])->name('user.login');

    Route::get('user-signup',[userController::class,'user_signup'])->name('user.signup');

    Route::post('add-user',[userController::class,'insert_user'])->name('insert.user');

    Route::get('verfy-user',[userController::class,'verfy'])->name('verfy.user');

    Route::post('user-active',[userController::class,'active'])->name('user.active');


    Route::post('get-login',[userController::class,'user_get_login'])->name('user_get_login');

    Route::get('user-logout',[userController::class,'user_logout'])->name('user.logout');

    //insert_user


    Route::get('logout',[loginController::class,'logout'])->name('log-out');
    // Route::get('/logout', ['uses' => 'App\Http\Controllers\admin\LoginController::classlogout']])->name('logout');


    Route::get('/', [productController::class,'home'])->name('back.home');

    // Route::get('shop', [productController::class,'shop'])->name('shop');

    // Route::get('single-product/{id}', [productController::class,'single_product'])->name('single-product');

    Route::get('card', [productController::class,'card'])->name('card');

    Route::get('sety', [productController::class,'sety'])->name('sety');

    Route::get('checkout', [productController::class,'check_out'])->name('checkout');

    // Route::get('shop', [front\productController::class,'shop'])->name('shop');*/
    // ########################## start cart page route ####################endregion
    Route::get('add/{id}',[cartController::class,'add'])->name('add.cart');

    Route::get('show',[cartController::class,'show'])->name('show.items.cart');

    Route::post('update-quntity/{items_id}',[cartController::class,'update'])->name('update.cart');



// ===================ajajx



});
// ################### Auth login route ###############
Route::Group(['middleware'=>'Auth'],function(){
    // Route::get('logout',[loginController::clas,'logout'])->name('log-out'
});

 // ============== Ajax test =================================

 Route::group(['prefix'=>'ajax-offer'],function(){
    Route::get('/create',[offerController::class,'create']);

    Route::post('/store','offerController@store')->name('ajax.offers.store');



 });








// ########################## laravel static ###############33
// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']])->name('home');
