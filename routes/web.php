<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\user\UserDashboardComponent;
//Uses Admin
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditItemComponent;
use App\Http\Livewire\Admin\AdminAddItemComponent;
use App\Http\Livewire\Admin\AdminAllItemComponent;
use App\Http\Livewire\Admin\AdminAddDiscountComponent;
use App\Http\Livewire\Admin\AdminAllDiscountsComponent;
use App\Http\Livewire\Admin\AdminEditDiscountsComponent;
use App\Http\Livewire\Admin\AdminAddAttributeComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminAllAttributeComponent;
use App\Http\Livewire\Admin\AdminAllCategoryComponent;
use App\Http\Livewire\Admin\AdminEditAttributeComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Livewire\Admin\AdminAddLogisticComponent;
use App\Http\Livewire\Admin\AdminAllLogisticsComponent;
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

    Route::get('/admin/add.category', AdminAddCategoryComponent::class)->name('admin.add.category');
    Route::get('/admin/all.category', AdminAllCategoryComponent::class)->name('admin.all.category');
    Route::get('/admin/edit.category', AdminEditCategoryComponent::class)->name('admin.edit.category');

    Route::get('/admin/add.attributes', AdminAddAttributeComponent::class)->name('admin.add.attributes');
    Route::get('/admin/all.attributes', AdminAllAttributeComponent::class)->name('admin.all.attributes');
    Route::get('/admin/edit.attributes', AdminEditAttributeComponent::class)->name('admin.edit.attributes');

    Route::get('/admin/add.logistic', AdminAddLogisticComponent::class)->name('admin.add.logistic');
    Route::get('/admin/all.logistic', AdminAllLogisticsComponent::class)->name('admin.all.logistic');
    });

    //Routes for json
    Route::post('/carregar_json', [ItemController::class, 'carregarJson']);
    Route::get('/pegar_codigo', [ItemController::class, 'index']);

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');*/
