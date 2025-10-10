<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::middleware('guest')->prefix('deal')->group(function () {
    Volt::route('fpt-telecom', 'client.deal.fpttelecom')
        ->name('deal.fpttelecom');
    Volt::route('fpt-telecom-order/{slug}', 'client.deal.FpttelecomOrder')
        ->name('deal.fpttelecom.order');
});


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                