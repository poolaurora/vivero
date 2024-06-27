<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', function () {
    // Aqui você pode processar os dados do formulário, por exemplo, salvar no banco de dados ou enviar um e-mail

    // Redirecionar para a página de agradecimento
    return redirect('/thank-you');
});

Route::view('/thank-you', 'thank-you')->name('thank-you');