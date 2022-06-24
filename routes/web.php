<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserFormController;


Route::get('/', function () {
    return view('formView');
});


Route::post('/userSubmit', [UserFormController::class, 'userSubmit']);