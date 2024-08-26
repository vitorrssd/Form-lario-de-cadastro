<?php
use  App\Http\Controllers\IndexController;
use  App\Http\Controllers\LoginController;
use  App\Http\Controllers\HomeController;
use  App\Http\Controllers\SobrenosController;
use  App\Http\Controllers\CadastroController;
use Illuminate\Support\Facades\Route;

Route::get('/',
 [IndexController::class, 'index'])->name('index');

 Route::get('/sobrenos', 
 [SobrenosController::class, 'sobrenos'])->name('sobrenos');

 Route::get('/home', 
 [HomeController::class, 'home'])->name('home');

 Route::get('/cadastro', 
 [CadastroController::class, 'cadastrar'])->name('cadastro');

 Route::post('/cadastro', 
 [CadastroController::class, 'cadastro'])->name('form.cadastro');

 Route::get('/login', 
 [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', 
[LoginController::class, 'login'])->name('login.attempt');

Route::get('/index', function () {
    return view('index');
})->name('index');