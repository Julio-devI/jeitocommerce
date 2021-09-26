<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\user\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

/*Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});*/

Route::get('/', HomeComponent::class)->name('home');

Route::get('/shop', ShopComponent::class)->name('shop');

//Routes for customers and users
Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

//Routes for admins
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function() {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});
/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');*/
