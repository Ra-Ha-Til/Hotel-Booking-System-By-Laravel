<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


route::get('/', [AdminController::class, 'home']);


route::get('/home',[AdminController::class,'index'])-> name('home');