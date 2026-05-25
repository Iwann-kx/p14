<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;

// Rute umum non-autentikasi
Route::get('/', function () {
    return view('welcome');
});
Route::get('/beranda', function () {
    return view('user.beranda');
});
Route::get('/tentang', function () {
    return view('user.tentang');
});

// Halaman detail berita publik
Route::get('/berita/{slug}', [ArticleController::class, 'showPublic'])->name('berita.show');

// Autentikasi bawaan Laravel UI
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rute Group untuk Admin (Hanya boleh diakses oleh user yang sudah Login)
Route::middleware(['auth'])->group(function () {

    // Halaman Utama Dashboard dan halaman statis admin lain
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::get('/users/roles', function () {
            return view('admin.users.roles');
        })->name('users.roles');

        Route::get('/products', function () {
            return view('admin.products.index');
        })->name('products.index');
        Route::get('/products/create', function () {
            return view('admin.products.create');
        })->name('products.create');
        Route::get('/products/categories', function () {
            return view('admin.products.categories');
        })->name('products.categories');

        Route::get('/reports/sales', function () {
            return view('admin.reports.sales');
        })->name('reports.sales');
        Route::get('/reports/inventory', function () {
            return view('admin.reports.inventory');
        })->name('reports.inventory');
        Route::get('/reports/analytics', function () {
            return view('admin.reports.analytics');
        })->name('reports.analytics');

        Route::get('/settings/general', function () {
            return view('admin.settings.general');
        })->name('settings.general');
        Route::get('/settings/profile', function () {
            return view('admin.settings.profile');
        })->name('settings.profile');
        Route::get('/settings/security', function () {
            return view('admin.settings.security');
        })->name('settings.security');
    });

    // CRUD Pengguna, Kategori & Berita
    Route::resource('/admin/users', UserController::class);
    Route::resource('/admin/categories', CategoryController::class);
    Route::resource('/admin/articles', ArticleController::class);
    Route::resource('/admin/tags', TagController::class);
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');


});

