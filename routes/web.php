<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::middleware('web')->group(function () {
    Route::get('/index', function () {
        return view('index');
    })->name('olympus.index');
    Route::get('/about', function () {
        return view('about');
    })->name('olympus.about');
    Route::get('/service', function () {
        return view('service');
    })->name('olympus.service');
    Route::get('/contact', function () {
        return view('contact');
    })->name('olympus.contact');
    Route::group(['prefix' => 'pages'], function(){ // /pages/...
        Route::get('/price', function () {
            return view('pages.price');
        })->name('olympus.pages.price');
    });
});
    

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
