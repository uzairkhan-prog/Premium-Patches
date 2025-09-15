<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\Frontend\AboutPageController::class, 'index'])->name('about');

Route::get('/service', [App\Http\Controllers\Frontend\ServicePageController::class, 'index'])->name('service');

Route::get('/{type}', [App\Http\Controllers\Frontend\ServicePageController::class, 'showSingleServciePage'])
    ->where('type', 'logo-digitizing|3d-puff-embroidery-digitizing|left-chest-digitizing|centre-chest-digitizing|applique-digitizing|cap-digitizing|jacket-back-digitizing|sew-on-embroidered|iron-on-embroidered|velcro-embroidered|adhesive-patches|pvc-patches|leather-patches|raster-to-vector')
    ->name('types');

Route::get('/blogs', [App\Http\Controllers\Frontend\BlogPageController::class, 'index'])->name('blogs');
Route::get('/blog-{id}', [App\Http\Controllers\Frontend\BlogPageController::class, 'show'])->name('blog.show');

Route::get('/portfolio', [App\Http\Controllers\Frontend\PortfolioPageController::class, 'index'])->name('portfolio');
// Route::get('/patches-pricing', [App\Http\Controllers\Frontend\PricingPageController::class, 'index'])->name('patches-pricing');

Route::get('/reviews', [App\Http\Controllers\Frontend\ReviewsPageController::class, 'index'])->name('reviews');

Route::get('/contact', [App\Http\Controllers\Frontend\ContactPageController::class, 'index'])->name('contact');
Route::post('/store-client', [App\Http\Controllers\Frontend\ContactPageController::class, 'store'])->name('client.store');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// Admin Routes
// Route::middleware('auth')->group(function () {
//     Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/clients/export-excel/{client}', [ClientController::class, 'exportExcel'])->name('clients.exportExcel');
Route::get('clients/{client}/download', [ClientController::class, 'downloadDocument'])->name('clients.download');
Route::post('/clients/delete-multiple', [ClientController::class, 'deleteMultiple'])->name('clients.deleteMultiple');
Route::get('/clients/export-selected', [ClientController::class, 'exportSelected'])->name('clients.exportSelected');
Route::get('/clients/export-all', [ClientController::class, 'exportAll'])->name('clients.exportAll');

Route::middleware(['auth'])->group(function () {
    Route::resource('/admin/services', ServiceController::class); // For CRUD
    Route::resource('/admin/blogs', BlogController::class); // For CRUD
    Route::resource('/admin/portfolios', PortfolioController::class); // For CRUD
    Route::resource('/admin/clients', ClientController::class); // For CRUD
    Route::post('/admin/clear-cache', [AdminController::class, 'clearCache'])->name('admin.clearCache');
});
