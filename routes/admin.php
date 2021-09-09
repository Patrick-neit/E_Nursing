<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\HomeController as ControllersHomeController;

Route::get('', [HomeController::class,'index']);
