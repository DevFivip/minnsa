<?php

use App\Http\Controllers\CertificadoController;
use App\Http\Controllers\PersonaController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('persona', PersonaController::class);

Route::get('/publico/certificado/index', [CertificadoController::class, 'index']);


Route::prefix('ooooo')->group(function() {
    Auth::routes();
  });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
