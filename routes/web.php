<?php

use App\Http\Controllers\ProductoController;
use App\HTTP\Controllers\CitaController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\CorteController;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

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
    return view('index');
});

Route::middleware('web')->group(function () {
    Route::get('/index', function () {
        return view('index');
    })->name('olympus.index');
    Route::get('/conocenos', function () {
        return view('conocenos');
    })->name('olympus.conocenos');

    //rutas para pasar registros de admin a vistas de index
    Route::get('/', [ServicioController::class, 'vistasIndex']);
    Route::get('/index', [ServicioController::class, 'vistasIndex'])->name('olympus.index');
    
    //Se envia la información del formulario por método post del agendar-cita
    //hacia la ruta /cita-store, la recibe la funcion 'storeUsuario' y una vez 
    //almacenado, lo reedireciona a la vista /agendar-cita
    Route::post('/cita-store', [CitaController::class, 'storeUsuario'])->name('olympus.cita-store');

    Route::get('/agendar-cita', [CitaController::class, 'createUsuario'])->name('olympus.agendar-cita');
    Route::resource('/cita', CitaController::class)->parameters(['cita' => 'cita']);
    Route::prefix('/cita')->group(function () {
        Route::post('confirmarCita', [CitaController::class, 'confirmarCita'])->name('cita.confirmarCita');
        Route::post('recordarCita/{id}', [CitaController::class, 'recordarCita'])->name('cita.recordarCita');
        Route::get('confirmarCorreo/{id}/{status}', [CitaController::class, 'confirmarCorreo'])->name('cita.confirmarCorreo');
    });
    Route::group(['prefix' => 'listas'], function () {
        Route::get('/precios', function () {
            return view('listas.precios');
        })->name('olympus.listas.precios');

        // Rutas que sirven para pasar los atributos de los crud de admin a la vista del usuario //
        Route::get('/cortes', [CorteController::class, 'corteUsuario'])->name('olympus.listas.cortes');
        Route::get('/servicios', [ServicioController::class, 'servicioUsuario'])->name('olympus.listas.servicios');
        Route::get('/barberos', [EmpleadoController::class, 'empleadoUsuario'])->name('olympus.listas.barberos');
        Route::get('/productos', [ProductoController::class, 'productoUsuario'])->name('olympus.listas.productos');

        Route::get('/horario', function () {
            return view('listas.horario');
        })->name('olympus.listas.horario');
        Route::get('/testimonios', function () {
            return view('listas.testimonios');
        })->name('olympus.listas.testimonios');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::resource('empleado', EmpleadoController::class);
    Route::resource('cita', CitaController::class)->parameters(['cita' => 'cita']);
    Route::resource('servicio', ServicioController::class);
    Route::resource('corte', CorteController::class);
    Route::resource('producto', ProductoController::class);
    Route::group(['prefix' => 'citas'], function () {
        Route::get('/proximas/{dias}', [CitaController::class, 'citasProximas'])->name('olympus.citas.citaProxima');
    });
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
