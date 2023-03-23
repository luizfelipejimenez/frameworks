<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('usuarios.index');
});

Route::resource('/usuarios', UserController::class);