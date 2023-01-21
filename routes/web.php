<?php

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



Route::group(['namespace'=>'App\Http\Controllers'], function(){
// ================================Orphans======================================================================================
    Route::controller(OrphanController::class)->group(function(){
        Route::get('/orphans', 'index')->name('orphans');
        Route::get('/orphans/create', 'create')->name('orphans.create');
        Route::post('/orphans', 'store')->name('orphans');
        Route::get('/orphans/{id}/edit', 'edit')->name('orphans.edit');
        Route::post('/orphans/{id}', 'update')->name('orphans.update');
        Route::get('/orphans/{id}', 'destroy')->name('orphans.delete');
        Route::post('/orphans/search', 'search');
    });

      Route::controller(FamilyController::class)->group(function(){
        Route::get('/families', 'index')->name('families');
        Route::get('/families/create', 'create')->name('families.create');
        Route::post('/families', 'store')->name('families.store');
        Route::get('/families/{id}/edit', 'edit')->name('families.edit');
        Route::post('/families/{id}', 'update')->name('families.update');
        Route::get('/families/{id}', 'destroy')->name('families.delete');
        Route::post('/families/search', 'search');
    });
    // ====================================================================================================================================
    
      Route::controller(DonationController::class)->group(function(){
        Route::get('/donations', 'index')->name('donations');
        Route::get('/donations/donate', 'donate')->name('donations.donate');
        Route::get('/donations/create/{id}', 'create')->name('donations.create');
        Route::post('/donations', 'store')->name('donations.store');
        Route::get('/donations/{id}/edit', 'edit')->name('donations.edit');
        Route::post('/donations/{id}', 'update')->name('donations.update');
        Route::get('/donations/{id}', 'destroy')->name('donations.delete');
        Route::post('/families/search', 'search');
    });
    // ====================================================================================================================================
    // ================================Posts===============================================================================================
    Route::controller(PostsController::class)->group(function(){
        Route::get('/posts','index');
        Route::post('/posts','store');
        Route::get('/posts/{id}','show');
        Route::get('/posts/{id}/edit','edit');
        Route::put('/posts/{id}','update');
        Route::delete('/posts/{id}','destroy');
      
      });
    // ====================================================================================================================================

   //================================Posts===============================================================================================
    Route::controller(CommentsController::class)->group(function(){
        Route::post('/comment/{id}','store');
       
        Route::delete('/comments/{id}','destroy');
      
      });
    // ====================================================================================================================================
   });






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
