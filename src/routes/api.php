<?php

use Illuminate\Support\Facades\Route;
use jsbhudev\faq\Http\Controllers\Api\FaqController;


Route::any(config('faq.route'), [FaqController::class, 'index'])->name('api.faq.index');
