<?php

use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
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


Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/about', [PagesController::class, 'about']);
Route::get('/introduction', [PagesController::class, 'introduction']);
Route::get('/mission', [PagesController::class, 'mission']);
Route::get('/contactus', [PagesController::class, 'contactus']);
Route::get('/gallerys', [PagesController::class, 'gallerys']);
Route::get('/notices', [PagesController::class, 'notices']);
Route::get('/course', [PagesController::class, 'course']);


Route::middleware('auth')->get("user-profile", function (Request $request) {
    return view('user-profile', [
        'user' => $request->user(),
    ]);
})->name('view-profile');



Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get("/dashboard", function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/notice', [NoticeController::class, 'index'])->name('notice.index');
    Route::get('/notice/create', [NoticeController::class, 'create'])->name('notice.create');
    Route::post('/notice/store', [NoticeController::class, 'store'])->name('notice.store');
    Route::get('/notice/{id}/edit', [NoticeController::class, 'edit'])->name('notice.edit');
    Route::post('/notice/{id}/update', [NoticeController::class, 'update'])->name('notice.update');
    Route::delete('/notice/destroy', [NoticeController::class, 'destroy'])->name('notice.destroy');

    // gallery
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/gallery/{id}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::post('/gallery/{id}/update', [GalleryController::class, 'update'])->name('gallery.update');
    Route::delete('/gallery/destroy', [GalleryController::class, 'destroy'])->name('gallery.destroy');

    Route::get('/team', [TeamController::class, 'index'])->name('team.index');
    Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
    Route::post('/team/store', [TeamController::class, 'store'])->name('team.store');
    Route::get('/team/{id}/edit', [TeamController::class, 'edit'])->name('team.edit');
    Route::post('/team/{id}/update', [TeamController::class, 'update'])->name('team.update');
    Route::delete('/team/destroy', [TeamController::class, 'destroy'])->name('team.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/viewsnotice/{id}', [PagesController::class, 'views'])->name('views');
    // Route::get('/studentregister',[PagesController::class,'studentregister']);


});

Route::get('/adminlogin', [PagesController::class, 'showlogin'])->name('adminlogin');
require __DIR__ . '/auth.php';
