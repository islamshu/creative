<?php

use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\ClientSectionController;
use App\Http\Controllers\ContactUSController;
use App\Http\Controllers\FirstSectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HowToWorkController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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

Route::get('login',[HomeController::class,'get_login'])->name('login');
Route::post('login',[HomeController::class,'post_login'])->name('post_login');
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/retrurn_projects',[HomeController::class,'retrurn_projects'])->name('retrurn_projects');
Route::post('contact_us',[HomeController::class,'contact_us'])->name('contact_us');


Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('',[HomeController::class,'dashboard'])->name('dashboard');
    Route::get('edit_profile','App\Http\Controllers\HomeController@edit_profile')->name('edit_profile');
    Route::post('update_profile','App\Http\Controllers\HomeController@update_profile')->name('update_profile');
    Route::get('logout','App\Http\Controllers\HomeController@logout')->name('logout');

    Route::resource('first',FirstSectionController::class);
    Route::resource('services',ServiceController::class);
    Route::resource('about',AboutSectionController::class);
    Route::resource('projects',ProjectController::class);
    Route::resource('HowItWork',HowToWorkController::class);
    Route::resource('clients',ClientSectionController::class);
    Route::resource('packages',PackageController::class);
    Route::resource('reviews',ReviewController::class);
    Route::resource('contactus',ContactUSController::class);

    Route::get('social',[HomeController::class,'social'])->name('social');

    
    
    Route::post('reorder_HowItWork',[HowToWorkController::class,'reorder_HowItWork'])->name('reorder_HowItWork');

    Route::post('reorder_service',[ServiceController::class,'reorder_service'])->name('reorder_service');
    Route::get('setting',[HomeController::class,'get_setting'])->name('get_setting');
    Route::post('get_setting_post',[HomeController::class,'get_setting_post'])->name('get_setting_post');

});