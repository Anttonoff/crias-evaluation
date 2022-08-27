<?php

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

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::middleware(['role:personal-control|reclutador'])->get('/calfs', App\Http\Livewire\Calf\Index::class)->name('calf.index');
    Route::middleware(['role:personal-control|reclutador'])->get('/calf/create', \App\Http\Livewire\Calf\Create::class)->name('calf.create');
    Route::middleware(['role:ayudante-veterinario'])->get('/sensor-logs', \App\Http\Livewire\SensorLog\Index::class)->name('sensor.log.index');
    Route::middleware(['role:ayudante-veterinario'])->get('/sensor-log/create', \App\Http\Livewire\SensorLog\Create::class)->name('sensor.log.create');
    Route::middleware(['role:veterinario'])->get('/sick-calfs', \App\Http\Livewire\SickCalf\Index::class)->name('sick.calf.index');
    Route::middleware(['role:veterinario'])->get('/sick-calf/create/{slug}', \App\Http\Livewire\SickCalf\Create::class)->name('sick.calf.create');
});
