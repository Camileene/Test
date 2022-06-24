<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserFormController;


Route::get('/', function () {
    return view('welcome');
});


Route::post('/userSubmit', 
[UserFormController::class, 'userSubmit']);