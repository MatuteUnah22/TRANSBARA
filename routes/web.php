<?php

use App\Http\Controllers\CargasAgrController;
use App\Http\Controllers\CargasEntController;
use App\Http\Controllers\CargosController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\CoPendientesController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\ObjetosController;
use App\Http\Controllers\PaisesController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\TipoContratoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //Rutas para usuario
    Route::resource('usuarios', UsuarioController::class)->names('usuarios');

    //Rutas para empleados
    Route::resource('empleados', EmpleadoController::class)->names('empleados');

    //Rutas para clientes
    Route::resource('clientes', ClienteController::class)->names('clientes');

    //Rutas para clientes
    Route::resource('proveedores', ProveedorController::class)->names('proveedores');

    //Rutas para cargas
    Route::resource('agcargas', CargasAgrController::class)->names('agcargas');

    //Rutas para cargas entegadas
    Route::resource('encargas', CargasEntController::class)->names('encargas');

    //Rutas para tipo de contrato
    Route::resource('tipcontratos', TipoContratoController::class)->names('tipcontratos');

    //Rutas para Registro Compras
    Route::resource('recompras', ComprasController::class)->names('recompras');

    //Rutas para paises
    Route::resource('paises', PaisesController::class)->names('paises');

    //Rutas para Compras Pendientes
    Route::resource('copendientes', CoPendientesController::class)->names('copendientes');

    //Rutas para tipo de estados
    Route::resource('tipestados', EstadoController::class)->names('tipestados');

    //Rutas para tipo de cargos
    Route::resource('tipcargos', CargosController::class)->names('tipcargos');

    //Rutas para paises COPIAS
    Route::resource('objetos', ObjetosController::class)->names('objetos');

    //Rutas para planillas
    Route::resource('planillas', PlanillaController::class)->names('planillas');

   //Rutas para paises COPIAS
   // Route::resource('paises', PaisesController::class)->names('paises');

    //Rutas para paises COPIAS
   // Route::resource('paises', PaisesController::class)->names('paises');

    //Rutas para paises COPIAS
   // Route::resource('paises', PaisesController::class)->names('paises');

   //Rutas para paises COPIAS
   // Route::resource('paises', PaisesController::class)->names('paises');
});

