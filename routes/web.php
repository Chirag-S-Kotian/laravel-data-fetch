<?php

use App\Http\Controllers\TimesOfIndiaController;

Route::get('/', [TimesOfIndiaController::class, 'index']);
Route::get('/data', [TimesOfIndiaController::class, 'getData'])->name('data.get');

