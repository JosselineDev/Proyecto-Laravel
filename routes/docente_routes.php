<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;

//verifica si el usuario autenticado es un docente antes de permitirle acceder.(middleware)
Route::group(['prefix' => 'docentes', 'middleware' => 'auth_docentes'], function (){
    Route::get('/', [DocenteController::class, 'index'])->name('docentes.index');
    Route::get('/show/{id}', [DocenteController::class, 'show'])->name('docentes.show');
    Route::get('/create', [DocenteController::class, 'create'])->name('docentes.create');
    Route::post('/create', [DocenteController::class, 'store'])->name('docentes.store');
    Route::get('/edit/{id}', [DocenteController::class, 'edit'])->name('docentes.edit');
    Route::post('/edit/{id}', [DocenteController::class, 'update'])->name('docentes.update');
    Route::get('/delete/{id}', [DocenteController::class, 'delete'])->name('docentes.delete');
    Route::post('/delete/{id}', [DocenteController::class, 'destroy'])->name('docentes.destroy');
});

Route::get('docentes/login', [DocenteController::class, 'showLoginForm'])->name('docentes.showLoginForm');
Route::post('docentes/login', [DocenteController::class, 'login'])->name('docentes.login');
Route::get('docentes/logout', [DocenteController::class, 'logout'])->name('docentes.logout');