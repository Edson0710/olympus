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
    Route::get('/servicios', function () {
        return view('servicios');
    })->name('olympus.servicios');
    Route::get('/agendar-cita', function () {
        return view('agendar-cita');
    })->name('olympus.agendar-cita');
    Route::group(['prefix' => 'listas'], function(){
        Route::get('/precios', function () {
            return view('listas.precios');
        })->name('olympus.listas.precios');
        Route::get('/barberos', function () {
            return view('listas.barberos');
        })->name('olympus.listas.barberos');
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
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

