<?php
use Illuminate\Support\Facades\Route;
use App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
// ================ Controllers files path ======================
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\categoriController;
use App\Http\Controllers\admin\languagesController;
use App\Http\Controllers\admin\itemsController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\BrandsController;
use App\Http\Middleware\AdminAuthenticated;


// ===============================================================
// use app\http\Requests\loginRequests;
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

Route::group(['namespace'=>'admin','middleware'=>'auth:user'],function(){

    Route::post('admin-login',[adminController::class,'admin_Login_page'])->name('admin.login.page');
    Route::get('Dashboard',[dashboardController::class,'index'])->name('admin.dashboard');
    Route::get('sign-up', [adminController::class,'signup_page'])->name('admin.signup.page');

    Route::get('all-items',[itemsController::class,'index'])->name('all.items');
    Route::get('create',[itemsController::class,'create'])->name('create.item');
    Route::post('/insert','itemsController@insert')->name('insert.item');
    Route::get('edite/{id}',[itemsController::class,'edite'])->name('edite.item');
    Route::post('update/{id}',[itemsController::class,'update'])->name('update.item');
    Route::get('delete/{id}',[itemsController::class,'delete'])->name('delete.item');





    // Route::post('',[adminController::class,''])->name();
    // Route::post('',[adminController::class,''])->name();
    // Route::post('',[adminController::class,''])->name();
    // Route::post('',[::class,''])->name();
    // Route::post('',[::class,''])->name();
    // Route::post('',[::class,''])->name();
    // Route::post('',[::class,''])->name();
    // Route::post('',[::class,''])->name();
    // Route::post('',[::class,''])->name();



});






###################### start admin login routes #################################
/*
Route::group(['namespace'=>'admin'],function(){



Route::get('admin_login', [adminController::class,'admin_Login_page'])->name('admin_Login_page');

// Route::group(['namespace'=>'admin','middleware' => 'guest'], function () {

    Route::get('/', [dashboardController::class,'index'])->name('admin.dashboard');


    //========= admin controller route==================


    Route::get('sign-up', [adminController::class,'signup_page'])->name('admin.signup.page');

    Route::post('get-signUp', [adminController::class,'insert_admin'])->name('insert.admin');

    Route::post('login', [adminController::class,'Login'])->name('get.admin.login');//('admin.login)





    Route::post('active-user', [adminController::class,'update'])->name('user');





// end adminlogin route
// ################## start admin Dashboard routes ######################

// Route::group(['namespace' => 'admin',c'middleware' => 'auth:Admin'], function () {
// Route::group(['namespace' => 'admin'], function () {


// >>>>>>>>>>>>>>>>>>>>>>>> start language route <<<<<<<<<<<<<<


// ############## starts items route #################################

Route::get('all-items',[itemsController::class,'index'])->name('all.items');

Route::get('/create',[itemsController::class,'create'])->name('create.item');

Route::post('/insert','itemsController@insert')->name('insert.item');

Route::get('edite/{id}',[itemsController::class,'edite'])->name('edite.item');

Route::post('update/{id}',[itemsController::class,'update'])->name('update.item');

Route::get('delete/{id}',[itemsController::class,'delete'])->name('delete.item');
//end items route
// ##################### start Brands Routes ###############

###################   ####################
});//

// });

// Auth::routes();  ->>>Don't allow it <<<
*/
