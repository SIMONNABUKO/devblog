<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class,'index'])->name('welcome');
Route::get('/posts/{slug}', [PostsController::class,'post'])->name('post.show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user/dashboard', [DashboardController::class,'dashboard'])->middleware(['auth','admin']);

Route::post('/newsletter/subscribe', [NewsletterController::class,'store'])->name('newsletter.email.store');


Route::group(['prefix'=>'/dashboard/admin','as'=>'dashboard.admin.','middleware'=>['auth','admin']], function () {
    Route::group(['prefix'=>'/categories','as'=>'categories.'], function () {
        Route::get('/', [CategoriesController::class,'index'])->name('all');
        Route::get('/create', [CategoriesController::class,'create'])->name('create');
        Route::post('/store', [CategoriesController::class,'store'])->name('store');
        Route::get('/edit/{id}', [CategoriesController::class,'edit'])->name('edit');
        Route::post('/update/{id}', [CategoriesController::class,'update'])->name('update');
        Route::get('/status/update/{id}', [CategoriesController::class,'updateStatus'])->name('status.update');
        Route::get('/delete/{id}', [CategoriesController::class,'delete'])->name('delete');
    });

    Route::group(['prefix'=>'/posts','as'=>'posts.'], function () {
        Route::get('/', [PostsController::class,'index'])->name('all');
        Route::get('/create', [PostsController::class,'create'])->name('create');
        Route::post('/store', [PostsController::class,'store'])->name('store');
        Route::get('/edit/{id}', [PostsController::class,'edit'])->name('edit');
        Route::post('/update/{id}', [PostsController::class,'update'])->name('update');
        Route::get('/status/update/{id}', [PostsController::class,'updateStatus'])->name('status.update');
        Route::get('/delete/{id}', [PostsController::class,'delete'])->name('delete');
    });
    Route::group(['prefix'=>'/settings','as'=>'settings.'], function () {
        Route::get('/', [SettingsController::class,'index'])->name('all');
        Route::get('/edit', [SettingsController::class,'edit'])->name('edit');
        Route::post('/update', [SettingsController::class,'update'])->name('update');
    });

    Route::group(['prefix'=>'/newsletter','as'=>'newsletter.'], function () {
        Route::get('/emails', [NewsletterController::class,'emails'])->name('emails');
    });
    Route::group(['prefix'=>'/users','as'=>'users.'], function () {
        Route::get('/all', [DashboardController::class,'allUsers'])->name('users.all');
        Route::get('/status/{id}', [DashboardController::class,'toggleStatus'])->name('status.toggle');
    });

    Route::group(['prefix'=>'/admin','as'=>'admin.'], function () {
        Route::get('/account', [AccountController::class,'account'])->name('account');
        Route::post('/account/update', [AccountController::class,'updateAccount'])->name('account.update');
        Route::get('/admin/logout', [AccountController::class,'logoutAdmin'])->name('admin.logout');
    });
});
