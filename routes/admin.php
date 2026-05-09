<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Users Routes
    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', function () {
            return view('admin.users.index');
        })->name('index');
        Route::get('/create', function () {
            return view('admin.users.create');
        })->name('create');
        Route::get('/roles', function () {
            return view('admin.users.roles');
        })->name('roles');
    });

    // Products Routes
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/', function () {
            return view('admin.products.index');
        })->name('index');
        Route::get('/create', function () {
            return view('admin.products.create');
        })->name('create');
        Route::get('/categories', function () {
            return view('admin.products.categories');
        })->name('categories');
    });

    // Reports Routes
    Route::prefix('reports')->name('reports.')->group(function () {
        Route::get('/sales', function () {
            return view('admin.reports.sales');
        })->name('sales');
        Route::get('/inventory', function () {
            return view('admin.reports.inventory');
        })->name('inventory');
        Route::get('/analytics', function () {
            return view('admin.reports.analytics');
        })->name('analytics');
    });

    // Settings Routes
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/general', function () {
            return view('admin.settings.general');
        })->name('general');
        Route::get('/profile', function () {
            return view('admin.settings.profile');
        })->name('profile');
        Route::get('/security', function () {
            return view('admin.settings.security');
        })->name('security');
    });
});
