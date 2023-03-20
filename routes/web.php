<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::group(['namespace'=>'App\Http\Controllers'], function() {

    Route::controller(WebsiteController::class)->group(function () {
        // Route::post('/families/search', 'search')->name('families.search');
        Route::get('/', 'index');
        Route::get('/about', 'about');
        // Route::post('/families', 'store')->name('families.store');
        // Route::get('/families/{id}/edit', 'edit')->name('families.edit');
        // Route::post('/families/{id}', 'update')->name('families.update');
        // Route::get('/families/{id}', 'destroy')->name('families.delete');
    });
});

Route::group(['namespace'=>'App\Http\Controllers'], function() {

    Route::controller(FamilyController::class)->group(function () {
        Route::post('/families/search', 'search')->name('families.search');
        Route::get('/families', 'index')->name('families');
        Route::get('/families/create', 'create')->name('families.create');
        Route::post('/families', 'store')->name('families.store');
        Route::get('/families/{id}/edit', 'edit')->name('families.edit');
        Route::get('/families/{id}/show', 'show')->name('families.show');
        Route::post('/families/{id}', 'update')->name('families.update');
        Route::get('/families/{id}/delete', 'destroy')->name('families.delete');
    });
});

Route::group(['namespace'=>'App\Http\Controllers','middleware'=>'auth'], function(){
// ================================Orphans======================================================================================
    Route::controller(OrphanController::class)->group(function(){
      Route::post('/orphans/search', 'search')->name('orphans.search');
        Route::get('/orphans', 'index')->name('orphans');
        Route::get('/orphans/transfers', 'transfers')->name('transfers');
        Route::get('/orphans/create', 'create')->name('orphans.create');
        Route::post('/orphans', 'store')->name('orphans');
        Route::post('/orphans/csv', 'csv')->name('orphans.csv');
        Route::get('/orphans/{id}/edit', 'edit')->name('orphans.edit');
        Route::post('/orphans/{id}/transfer', 'transferSave')->name('orphans.transfer.save');
        Route::post('/orphans/transfer', 'transferSave')->name('transfers.search');
       Route::get('/orphans/{id}/transfer', 'transfer')->name('orphans.transfer');
        Route::post('/orphans/{id}', 'update')->name('orphans.update');
        Route::get('/orphans/{id}', 'destroy')->name('orphans.delete');
        Route::get('/orphans/{id}/show', 'show')->name('orphans.show');
    });


    // ====================================================================================================================================

      Route::controller(DonationController::class)->group(function(){
        Route::post('/donations/search', 'search')->name('donations.search');
        Route::get('/donations', 'index')->name('donations');
        Route::get('/donations/donate', 'donate')->name('donations.donate');
        Route::get('/donations/group', 'group')->name('donations.group');
        Route::get('/donations/create/{id}', 'create')->name('donations.create');
        Route::post('/donations', 'store')->name('donations.store');
        Route::get('/donations/{id}/edit', 'edit')->name('donations.edit');
        Route::post('/donations/{id}', 'update')->name('donations.update');
        Route::get('/donations/{id}', 'destroy')->name('donations.delete');
    });
    // ====================================================================================================================================
     // ====================================================================================================================================

      Route::controller(AppointmentController::class)->group(function(){
        Route::get('/appointments', 'index')->name('appointments');
        Route::get('/email', 'terminate');
        Route::get('/appointments/donate', 'donate')->name('appointments.donate');
        Route::get('/appointments/{id}/create', 'create')->name('appointments.create');
        Route::post('/appointments', 'store')->name('appointments.store');
        Route::get('/appointments/{id}/edit', 'edit')->name('appointments.edit');
        Route::post('/appointments/{id}', 'update')->name('appointments.update');
        Route::get('/appointments/{id}/delete', 'destroy')->name('appointments.delete');
        Route::get('/appointments/{id}/approve', 'approve')->name('appointments.approve');
        Route::post('/appointments/{id}/reject', 'reject')->name('appointments.reject');
        // Route::post('/families/search', 'search');
    });
    // ====================================================================================================================================
      // ====================================================================================================================================

      Route::controller(AdoptionController::class)->group(function(){
        Route::get('/adoptions', 'index')->name('adoptions');
        Route::post('/adoptions/search', 'search')->name('adoptions.search');
        Route::get('/adoptions/adopt', 'adopt')->name('adoptions.adopt');
        Route::get('/adoptions/create/{id}', 'create')->name('adoptions.create');
        Route::post('/adoptions', 'store')->name('adoptions.store');
        Route::get('/adoptions/{id}/edit', 'edit')->name('adoptions.edit');
        Route::post('/adoptions/{id}', 'update')->name('adoptions.update');
        Route::get('/adoptions/{id}', 'destroy')->name('adoptions.delete');
        Route::get('/adoptions/{id}/approve', 'approve')->name('adoptions.approve');
        Route::get('/adoptions/{id}/reject', 'reject')->name('adoptions.reject');
    });
    // ====================================================================================================================================
    // ================================Posts===============================================================================================
    Route::controller(PostController::class)->group(function(){
        Route::get('/posts','index')->name('posts');
        Route::get('/posts/create','create')->name('posts.create');
        Route::post('/posts/store','store')->name('posts.store');
        Route::get('/posts/{id}','show');
        Route::get('/posts/{id}/edit','edit')->name('posts.edit');
        Route::post('/posts/{id}/update','update')->name('posts.update');
        Route::get('/posts/{id}','destroy')->name('posts.delete');

      });
    // ====================================================================================================================================

   });





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
