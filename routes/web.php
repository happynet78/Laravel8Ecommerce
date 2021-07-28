<?php

use App\Http\Livewire\CartComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\DetailComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class);

Route::get('/shop', ShopComponent::class);

Route::get('/cart', CartComponent::class)->name('product.cart');

Route::get('/checkout', CheckoutComponent::class);

Route::get('/product/{slug}', DetailComponent::class)->name('product.details');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// for User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function() {
	Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard'); 
});

// for Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function() {
	Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});
