<?php

use Illuminate\Support\Facades\Route;
use LaravelLiberu\Teams\Http\Controllers\Destroy;
use LaravelLiberu\Teams\Http\Controllers\Index;
use LaravelLiberu\Teams\Http\Controllers\Options;
use LaravelLiberu\Teams\Http\Controllers\Store;

Route::middleware(['api', 'auth', 'core'])
    ->prefix('api/administration/teams')
    ->as('administration.teams.')
    ->group(function () {
        Route::get('', Index::class)->name('index');
        Route::post('', Store::class)->name('store');
        Route::delete('{team}', Destroy::class)->name('destroy');
        Route::get('options', Options::class)->name('options');
    });
