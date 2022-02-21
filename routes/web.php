<?php

use App\Http\Controllers\HektoController;
use App\Http\Controllers\ProjectoneController;
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

Route::get('/', function () {
    return view('welcome');
});
// My Hekcto ecommerce product Add

Route::match(['get','post'],'/add_product', [HektoController::class, 'AddProduct']);


//Home page side

Route::get('/home', [ProjectoneController::class, 'home']);
Route::get('/about', [ProjectoneController::class, 'about']);
Route::get('/quote_receipt', [ProjectoneController::class, 'quote_receipt']);
Route::match(['get','post'],'/get_qoute', [ProjectoneController::class, 'get_qoute']);
Route::match(['get','post'],'/quote_estimate', [ProjectoneController::class, 'quote_estimate']);
Route::match(['post','get'],'/contact', [ProjectoneController::class, 'contact']);
Route::match(['post','get'],'/blog', [ProjectoneController::class, 'blog']);
Route::match(['post','get'],'/about', [ProjectoneController::class, 'about_us']);
Route::match(['post','get'],'/tracker', [ProjectoneController::class, 'tracker']);
Route::match(['post','get'],'/track_parcel', [ProjectoneController::class, 'track_parcel']);
Route::match(['post','get'],'/checkparcel_status', [ProjectoneController::class, 'checkparcel_status']);
Route::match(['post','get'],'/checkparcel_status1', [ProjectoneController::class, 'checkparcel_status1']);
Route::match(['post','get'],'/blog_details', [ProjectoneController::class, 'blog_details']);


// Admin side
Route::group(['middleware'=>'ropyAuth'],function () {

Route::get('/dashboard', [ProjectoneController::class, 'dashboard']);
Route::match(['post','get'],'/viewmore', [ProjectoneController::class, 'viewmore']);
Route::get('/view/{id}', [ProjectoneController::class, 'check_contact']);
Route::match(['post','get'],'/add_blog', [ProjectoneController::class, 'add_blog']);
Route::match(['post','get'],'/add_about', [ProjectoneController::class, 'add_about']);
Route::match(['post','get'],'/check_order', [ProjectoneController::class, 'check_order']);
Route::match(['post','get'],'/admin_signin', [ProjectoneController::class, 'admin_signin']);

// replace with match because its collecting from form and 

// Route::match(['post','get'],'/admin-login', [DellymanController::class, 'login']);

Route::match(['post','get'],'/check_contact', [ProjectoneController::class, 'check_contact']);
Route::match(['post','get'],'/admin_calculator', [ProjectoneController::class, 'admin_calculator']);
});
// Route::match(['post','get'],'/sign-up', [DellymanController::class, 'signup']);
// Route::match(['post','get'],'/validation', [DellymanController::class, 'validation_page']);
// Route::match(['post','get'],'/add-new-faq', [DellymanController::class, 'add_new_faq']);
// Route::match(['post','get'],'/verify-mail', [DellymanController::class, 'verification']);

Route::match(['post','get'],'/admin_signup', [ProjectoneController::class, 'admin_signup']);
Route::match(['post','get'],'/admin_signin', [ProjectoneController::class, 'admin_signin']);

    Route::get('/log_out',function(){

        if(session()->has('admin_signin')){
            session()->pull('admin_signin');
        }
        return redirect('/admin_signin');


});

