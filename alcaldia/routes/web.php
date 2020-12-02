<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Locality\LocalityController;
use App\Http\Controllers\Team\TeamController;
use App\Http\Controllers\Player\PlayerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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
Route::get('escritorio',[DashboardController::class,'index'])->name('dashboard.index');
Route::get('perfil',[DashboardController::class,'perfil'])->name('dashboard.perfil');

Route::get('login',[LoginController::class,'form_login'])->name('login.form_login');
Route::post('auth',[LoginController::class,'auth'])->name('login.auth');

/*
 * locality
 */
Route::get('localidad',[LocalityController::class,'index'])->name('locality.index');
Route::get('localidad/create',[LocalityController::class,'create'])->name('locality.create');
Route::post('localidad',[LocalityController::class,'store'])->name('locality.store');
Route::get('localidad/{id}',[LocalityController::class,'show'])->name('locality.show');
Route::get('localidad/edit/{id}',[LocalityController::class,'edit'])->name('locality.edit');
Route::put('localidad/{id}',[LocalityController::class,'update'])->name('locality.update');
Route::delete('localidad/{id}',[LocalityController::class,'destroy'])->name('locality.destroy');

/*
 * team
 */
Route::get('equipo',[TeamController::class,'index'])->name('team.index');
Route::get('equipo/create',[TeamController::class,'create'])->name('team.create');
Route::post('equipo',[TeamController::class,'store'])->name('team.store');
Route::get('equipo/{id}',[TeamController::class,'show'])->name('team.show');
Route::get('equipo/edit/{id}',[TeamController::class,'edit'])->name('team.edit');
Route::put('equipo/{id}',[TeamController::class,'update'])->name('team.update');
Route::delete('equipo/{id}',[TeamController::class,'destroy'])->name('team.destroy');
/*
 * player
 */
Route::get('jugador',[PlayerController::class,'index'])->name('player.index');
Route::get('jugador/create',[PlayerController::class,'create'])->name('player.create');
Route::post('jugador',[PlayerController::class,'store'])->name('player.store');
Route::get('jugador/{id}',[PlayerController::class,'show'])->name('player.show');
Route::get('jugador/edit/{id}',[PlayerController::class,'edit'])->name('player.edit');
Route::put('jugador/{id}',[PlayerController::class,'update'])->name('player.update');
Route::delete('jugador/{id}',[PlayerController::class,'destroy'])->name('player.destroy');

