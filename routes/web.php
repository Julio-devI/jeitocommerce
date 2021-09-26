<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\user\UserDashboardComponent;
//Uses Admin
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditItemComponent;
use App\Http\Livewire\Admin\AdminAddItemComponent;
use App\Http\Livewire\Admin\AdminAllItemComponent;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Livewire\Admin\AdminAddDiscountComponent;
use App\Http\Livewire\Admin\AdminAllDiscountsComponent;
use App\Http\Livewire\Admin\AdminEditDiscountsComponent;
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

Route::get('/', HomeComponent::class)->name('home');

Route::get('/shop', ShopComponent::class)->name('shop');

//Routes for customers and users
Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

//Routes for admins
Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/edit.item', AdminEditItemComponent::class)->name('admin.edit.item');
    Route::get('/admin/all.item', AdminAllItemComponent::class)->name('admin.all.items');
    Route::get('/admin/add.item', AdminAddItemComponent::class)->name('add.item');

    Route::get('/admin/add.discount', AdminAddDiscountComponent::class)->name('admin.add.discount');
    Route::get('/admin/all.discount', AdminAllDiscountsComponent::class)->name('admin.all.discount');
    Route::get('/admin/edit.discount', AdminEditDiscountsComponent::class)->name('admin.edit.discount');
    });

//Routes for json
Route::post('/carregar_json', [ItemController::class, 'carregarJson']);
Route::get('/pegar_codigo', [ItemController::class, 'index']);

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');*/
