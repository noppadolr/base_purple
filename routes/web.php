<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\AuthController;


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

Route::get('/', function () {
    return view('admin.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::controller(AdminController::class)->group(function(){
    Route::get('admin/login','AdminLogin')->name('admin.login');
    Route::get('admin/logout/view','LogoutView')->name('admin.logout.view');
    Route::get('admin/dashboard','AdminDashboard')->name('admin.dashboard');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('admin/logout','logout')->name('admin.logout');

});

Route::controller(ManagerController::class)->group(function(){

    Route::get('manager/dashboard','ManagerDashboard')->name('manager.dashboard');
});
