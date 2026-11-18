<?php

use App\Http\Controllers\PartieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PartieController::class, 'index'])->name('parties.index');

