<?php

use Illuminate\Support\Facades\Route;
use jsbhudev\faq\Http\Controllers\Api\FaqController;


Route::get('faq', [FaqController::class, 'index'])->name('api.faq.index');
