<?php

use App\Http\Controllers\provincesTest;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use Livewire\Volt\Volt;
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

// Route::view('/', 'welcome');
   Volt::route('/', 'client.deal.fpttelecom')
        ->name('deal.fpttelecom');
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/test',[provincesTest::class,'create']);
Route::get('/counter', Counter::class);
require __DIR__ . '/deal.php';
require __DIR__ . '/auth.php';
