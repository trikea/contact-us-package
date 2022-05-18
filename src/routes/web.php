<?php

use Mengtrikea\Contact\Http\Controllers\ContactController;

Route::get('contact', [ContactController::class, 'index'])->name('contacts.index');

Route::post('contact', [ContactController::class, 'store'])->name('contacts.store');
