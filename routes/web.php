<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminSkillController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomesController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminProjectController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminCertificateController;

Route::get('/defaultroot', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
});

Route::get('dashboard', function() {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('auth','admin');
Route::resource('/admin/dashboard/skill', AdminSkillController::class);

Route::resource('homes', AdminHomesController::class);
Route::resource('abouts', AdminAboutController::class);
Route::resource('project', AdminProjectController::class);
Route::resource('contact', AdminContactController::class);
Route::resource('certificates', AdminCertificateController::class);



Route::get('/home', [AboutController::class, 'index']);


require __DIR__.'/auth.php';