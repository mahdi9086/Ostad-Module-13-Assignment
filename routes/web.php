<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/my-profile/{id}',[ProfileController::class,'index']);