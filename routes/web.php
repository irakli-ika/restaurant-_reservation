<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\admin\TableController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\admin\ReservationController;
use App\Http\Controllers\Frontend\MenuController as FrontendMenuController;
use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\ReservationController as FrontendReservationController;

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

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/completed', [WelcomeController::class, 'completed'])->name('completed');

Route::get('/categories', [FrontendCategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [FrontendCategoryController::class, 'show'])->name('categories.show');
Route::get('/menus', [FrontendMenuController::class, 'index'])->name('menu.index');
// Route::get('/reservation', [FrontendReservationController::class, 'index'])->name('reservations.index');
Route::get('/reservation/create', [FrontendReservationController::class, 'create'])->name('reservations.create');
Route::post('/reservation/store', [FrontendReservationController::class, 'store'])->name('reservations.store');
 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [adminController::class, 'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/menus', MenuController::class);
    Route::resource('/tables', TableController::class);
    Route::resource('/reservations', ReservationController::class);
});

require __DIR__.'/auth.php';
