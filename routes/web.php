<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'OnlyAdmin:Admin,SuperAdmin'])->group(function () {

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
});

Route::middleware(['auth', 'OnlyAdmin:Admin,SuperAdmin'])->group(function () {

    Route::get('/category/update/list', [CategoryController::class, 'articleUpdate'])->name('artigory-tambah');
    Route::get('/category/add/list', [CategoryController::class, 'articleTambah'])->name('artigory-update');
    Route::get('/category/list', [CategoryController::class, 'index'])->name('category-list');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category-create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category-store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category-edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category-update');
    Route::delete('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category-delete');
    
});

Route::middleware(['auth', 'OnlyAdmin:Admin,SuperAdmin'])->group(function () {

    Route::get('/article/list', [ArticleController::class, 'index'])->name('article-list');
    Route::get('/article/create', [CategoryController::class, 'articleTambah'])->name('article-create');
    Route::post('/article/store', [ArticleController::class, 'store'])->name('article-store');
    Route::get('/article/edit/{id}', [ArticleController::class, 'edit'])->name('article-edit');
    Route::post('/article/update/{id}', [ArticleController::class, 'update'])->name('article-update');
    Route::delete('/article/delete/{id}', [ArticleController::class, 'delete'])->name('article-delete');
});

Route::middleware(['auth', 'OnlyAdmin:Admin,SuperAdmin'])->group(function () {

    Route::get('/team/list', [TeamController::class, 'index'])->name('team-list');
    Route::get('/team/create', [TeamController::class, 'create'])->name('team-create');
    Route::post('/team/store', [TeamController::class, 'store'])->name('team-store');
    Route::get('/team/edit/{id}', [TeamController::class, 'edit'])->name('team-edit');
    Route::post('/team/update/{id}', [TeamController::class, 'update'])->name('team-update');
    Route::delete('/team/delete/{id}', [TeamController::class, 'delete'])->name('team-delete');
});

Route::middleware(['auth', 'OnlyAdmin:Admin,SuperAdmin'])->group(function () {

    Route::get('/testimoni/list', [ClientController::class, 'testimoni'])->name('testimoni-list');
    Route::get('/kasus/list', [ClientController::class, 'kasus'])->name('kasus-list');
    Route::get('/client/create', [ClientController::class, 'create'])->name('client-create');
    Route::post('/client/store', [ClientController::class, 'store'])->name('client-store');
    Route::get('/client/edit/testimoni/{id}', [ClientController::class, 'editTesti'])->name('client-testimoni-edit');
    Route::get('/client/edit/kasus/{id}', [ClientController::class, 'editKas'])->name('client-kasus-edit');
    Route::post('/client/update/{id}', [ClientController::class, 'update'])->name('client-update');
    Route::delete('/client/delete/{id}', [ClientController::class, 'delete'])->name('client-delete');
});

Route::middleware(['auth', 'OnlyAdmin:Admin,SuperAdmin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('index');
});

Route::get('/services', function () {
    return view('pages.services_page');
});

Route::get('/aboutUs', function () {
    return view('pages.aboutus_page');
});

Route::get('/team', function () {
    return view('pages.team_page');
});

Route::get('/client', function () {
    return view('pages.client_page');
});

Route::get('/article', function () {
    return view('pages.article_page');
});

Route::get('/blogs', function () {
    return view('pages.blogs_page');
});

Route::get('/contact', function () {
    return view('pages.contact_page');
});

