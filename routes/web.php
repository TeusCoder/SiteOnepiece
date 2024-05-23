<?php

use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/',[\App\Http\Controllers\paginaInicial::class, 'paginaInicial'])->name('site.index');
Route::redirect('/pagina-inicial', '/');

Route::get('/personagens',[\App\Http\Controllers\listaPersonagens::class, 'personagens'])->name('site.personagens');
Route::redirect('/personagem', '/personagens');

// Route::get('/cadastrarPersonagens',[\App\Http\Controllers\cadastrarPersonagem::class, 'cadastrarPersonagem'])->name('site.cadastrarPersonagens');
Route::post('/cadastrarPersonagens',[\App\Http\Controllers\cadastrarPersonagem::class, 'savePersonagem'])->name('site.savePersonagem');
Route::get('/cadastrarPersonagens',[\App\Http\Controllers\cadastrarPersonagem::class, 'index'])->name('cadastrarPersonagens.index');
Route::redirect('/cadastrar', '/cadastrarPersonagens');

Route::get('/contato',[\App\Http\Controllers\contato::class, 'contato'])->name('site.contato');
Route::post('/contato',[\App\Http\Controllers\contato::class, 'saveContato'])->name('site.contato');
Route::redirect('/contat', '/contato');

Route::fallback([\App\Http\Controllers\fallbackController::class, 'fallback']);