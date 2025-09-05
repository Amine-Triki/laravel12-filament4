<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

/* Route::get('/', function () {
    return view('index');
})->name('home'); */

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/blog', [IndexController::class, 'blog'])->name('blog');
Route::get('/projects', [IndexController::class, 'projects'])->name('projects');

Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// عرض مقالة مفردة

Route::get('/post/{slug}', [PostController::class, 'show'])->name('post.show');

// حفظ تعليق — للمسجلين فقط
Route::post('/post/{id}/comment', [PostController::class, 'storeComment'])
    ->middleware('auth')
    ->name('comment.store');

// عرض مقالات حسب التصنيف
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');







Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
