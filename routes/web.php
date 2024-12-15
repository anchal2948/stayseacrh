<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

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

// Route::get('/migrate',function(){
//     Artisan::call('storage:link');
// });

Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::post('login',[AuthController::class,'login'])->name('login');


// ********************Admin*******************************
Route::get('admin/login',[AuthController::class,'login_page'])->name('admin.login.page');


// ************************Host***********************
Route::get('host/register',[AuthController::class,'host_register_page'])->name('host.register.page');
Route::post('host/register',[AuthController::class,'host_register'])->name('host.register');
Route::get('host/login',[AuthController::class,'host_login_page'])->name('host.login.page');


// ***************************User*************************

Route::get('register',[AuthController::class,'user_register_page'])->name('user.register.page');
Route::post('register',[AuthController::class,'user_register'])->name('user.register');
Route::get('login',[AuthController::class,'user_login_page'])->name('user.login.page');


Route::group(['middleware' => 'admin'],function(){
	Route::get('admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
});

Route::group(['middleware' => 'host'],function(){
	Route::get('host/dashboard',[HostController::class,'dashboard'])->name('host.dashboard');

	// Property
	Route::get('my-properties',[HostController::class,'properties'])->name('myproperty.list');
	Route::get('add-property',[HostController::class,'add_property'])->name('add.property');
	Route::post('add-property',[HostController::class,'create_property'])->name('property.post');

	// Blogs
	Route::get('host/blogs',[HostController::class,'blogs'])->name('host.blogs');
	Route::get('add-blog',[HostController::class,'create_blog'])->name('create.blog');
	Route::post('create-blog',[HostController::class,'add_blog'])->name('blog.add');

	// About
	Route::get('host/about-us',[HostController::class,'aboutus'])->name('host.about');
	Route::get('add-about',[HostController::class,'create_about'])->name('create.about');
	Route::post('create-about',[HostController::class,'add_about'])->name('about.add');

	// Terms & Conditions
	Route::get('host/terms-conditions',[HostController::class,'termsconditions'])->name('host.termsconditions');
	Route::get('host/add-terms',[HostController::class, 'create_terms'])->name('create.termsconditions');
	Route::post('host/add-terms',[HostController::class, 'add_terms'])->name('terms.add');

	// Success Story
	Route::get('host/success-story',[HostController::class,'success_story'])->name('host.success_story');
	Route::get('host/add-story',[HostController::class, 'create_success'])->name('create.success_story');
	Route::post('host/add-story',[HostController::class, 'add_success'])->name('story.add');

	// Booking Requests
	Route::get('host/booking-requests', [HostController::class, 'bookings'])->name('bookings');
});

Route::group(['middleware' => 'user'],function(){
	Route::get('dashboard',[UserController::class,'dashboard'])->name('user.dashboard');
	Route::get('my-profile',[UserController::class,'profile'])->name('user.profile');
	Route::get('my-bookings',[UserController::class,'bookings'])->name('user.bookings');
});


Route::get('privacy-policy',[UserController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('blogs',[HomeController::class, 'blogs'])->name('blogs');
Route::get('blog/{id}',[HomeController::class, 'blog_detail'])->name('blog_detail');
Route::get('terms-conditions',[HomeController::class, 'termsconditions'])->name('termsconditions');
Route::get('properties',[HomeController::class, 'properties'])->name('properties');
Route::get('properties/{id}',[HomeController::class, 'property_detail'])->name('property-detail');
Route::get('findout',[HomeController::class, 'findout'])->name('findout');
Route::get('luxury-management',[HomeController::class, 'luxury_management'])->name('luxury');
Route::post('book-property',[HomeController::class, 'request_to_book'])->name('request_to_book');

Route::get('logout',[AuthController::class,'logout'])->name('logout');