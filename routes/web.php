<?php

use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/',[\App\Http\Controllers\paginaInicial::class, 'paginaInicial'])->name('site.index');
Route::redirect('/pagina-inicial', '/');

Route::get('/personagens',[\App\Http\Controllers\personagens::class, 'personagens'])->name('site.personagens');
Route::redirect('/personagem', '/personagens');

Route::get('/cadastrarPersonagens',[\App\Http\Controllers\cadastrarPersonagem::class, 'cadastrarPersonagem'])->name('site.cadastrarPersonagens');
Route::redirect('/cadastrar', '/cadastrarPersonagens');

Route::get('/contato',[\App\Http\Controllers\contato::class, 'contato'])->name('site.contato');
Route::redirect('/contat', '/contato');

Route::fallback([\App\Http\Controllers\fallbackController::class, 'fallback']);