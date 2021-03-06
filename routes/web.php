<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UtilizadorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CorController;
use App\Http\Controllers\EnviarEmailController;
use App\Http\Controllers\FabricanteController;
use App\Http\Controllers\LevantamentoController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\ParqueamentoController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TipoViaturaController;
use App\Http\Controllers\VagaController;
use App\Http\Controllers\ViaturaController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*======================== Home page ==================================*/
Route::get('/', [HomeController::class, 'homepage'])->name('home');
/*============X=========== Home page ==================================*/

        /*======================== Utilizador routes ==================================*/
        Route::get('/utilizador', [UtilizadorController::class, 'index'])->name('utilizador');
        Route::post('/addUtilizadorAdmin', [UtilizadorController::class, 'storeAdmin'])->name('addUtilizador');
        Route::delete('/delUtilizador/{id}', [UtilizadorController::class, 'destroy']);
        Route::post('/addUtilizadorCliente', [UtilizadorController::class, 'storeCliente'])->name('addUtilizador');
        Route::put('/editUtilizador/{id}', [UtilizadorController::class, 'update']);
        Route::get('/registarDefault', [UtilizadorController::class, 'adminDefault'])->name('adminDefault');
        /*============X=========== Utilizador routes ================X=================*/

        /*======================= Cliente routes =========================================*/
        Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente');
        Route::post('/clienteAdd', [ClienteController::class, 'store'])->name('addCliente');
        Route::delete('/delCliente/{id}', [ClienteController::class, 'destroy']);
        Route::put('/editCliente/{id}', [ClienteController::class, 'update']);
        /*=====================X============= Cliente routes ==================X==================*/

        /*======================= Cores routes =========================================*/
        Route::get('/cor', [CorController::class, 'index'])->name('cor');
        Route::post('/addCor', [CorController::class, 'store'])->name('addCor');
        Route::delete('/delCor/{id}', [CorController::class, 'destroy']);
        Route::put('/editCor/{id}', [CorController::class, 'update']);
        /*=====================X============= Cores routes ==================X==================*/

        /*======================= Tipo de viatura routes =========================================*/
        Route::get('/tipo', [TipoViaturaController::class, 'index'])->name('tipo');
        Route::post('/addTipo', [TipoViaturaController::class, 'store'])->name('addTipo');
        Route::delete('/delTipo/{id}', [TipoViaturaController::class, 'destroy']);
        Route::put('/editTipo/{id}', [TipoViaturaController::class, 'update'])->name('editTipo');
        /*=====================X============= Cores routes ==================X==================*/

        /*======================= Fabricante de viatura routes =========================================*/
        Route::get('/fabricante', [FabricanteController::class, 'index'])->name('fabricante');
        Route::post('/addFabricante', [FabricanteController::class, 'store'])->name('addFabricante');
        Route::delete('/delFabricante/{id}', [FabricanteController::class, 'destroy']);
        Route::put('/editFabricante/{id}', [FabricanteController::class, 'update'])->name('editFabricante');
        /*=====================X============= Fabricante de viatura routes ==================X==================*/

        /*=======================  vaga routes =========================================*/
        Route::get('/vaga', [VagaController::class, 'index'])->name('vaga');
        Route::post('/addVaga', [VagaController::class, 'store'])->name('addVaga');
        Route::delete('/delVaga/{id}', [VagaController::class, 'destroy']);
        Route::put('/editVaga/{id}', [VagaController::class, 'update'])->name('editVaga');
        /*=====================X============= vaga routes ==================X==================*/



        /*=======================  Modelo routes =========================================*/
        Route::get('/modelo', [ModeloController::class, 'index'])->name('modelo');
        Route::post('/addModelo', [ModeloController::class, 'store'])->name('addModelo');
        Route::delete('/delModelo/{id}', [ModeloController::class, 'destroy']);
        Route::put('/editModelo/{id}', [ModeloController::class, 'update'])->name('editModelo');
        /*=====================X============= Modelo routes ==================X==================*/


        /*=======================  Viatura routes =========================================*/
        Route::get('/viatura', [ViaturaController::class, 'index'])->name('viatura');
        Route::post('/addViatura', [ViaturaController::class, 'store'])->name('addViatura');
        Route::delete('/delViatura/{id}', [ViaturaController::class, 'destroy']);
        Route::put('/editViatura/{id}', [ViaturaController::class, 'update'])->name('editViatura');
        /*=====================X============= Viatura routes ==================X==================*/


        /*=======================  Parqueamento routes =========================================*/
        Route::post('/addParqueamento', [ParqueamentoController::class, 'store'])->name('addParqueamento');
        Route::delete('/delParqueamento/{id}', [ParqueamentoController::class, 'destroy']);
        Route::put('/editParqueamento/{id}', [ParqueamentoController::class, 'update'])->name('editParqueamento');

        Route::get('/parqueamento', [ParqueamentoController::class, 'index'])->name('parqueamento');
        /*=====================X============= Parqueamento routes ==================X==================*/

        /*=======================  Parqueamento routes =========================================*/
        Route::post('/addLevantamento', [LevantamentoController::class, 'store'])->name('addLevantamento');
        Route::delete('/delLevantamento/{id}', [LevantamentoController::class, 'destroy']);
        Route::put('/editLevantamento/{id}', [LevantamentoController::class, 'update'])->name('editLevantamento');
        Route::get('/levantamento', [LevantamentoController::class, 'index'])->name('levantamento');
        /*=====================X============= Parqueamento routes ==================X==================*/

/*======================= Authentication routes =========================================*/
Auth::routes();
Route::get('/admin', [AuthController::class, 'dashboard'])->name('admin');
Route::post('/login', [AuthController::class, 'login'])->name('efectuarLogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
/*==============X============= Authentication routes ====================X====================*/

/* ===================================== Session ========================================*/
Route::get('session', [SessionController::class, 'session'])->name('session');
/* ====================X=============== Session ====================X====================*/

/*Route::get('/send-email', function(){
    $details = [
        'title' => 'Mail from Fasthy',
        'body' => 'this i form testing email using smtp'
    ];
    \Mail::to('fasthymachava12@gmail.com')->send(new \App\Mail\ContactoMail($details));
    echo "Email has been sent!";
});*/

//Route::post('/enviarEmail', [HomeController::class, 'enviar'])->name('enviarEmail');
