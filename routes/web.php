<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EtudiantFLSHMController;
use App\Http\Controllers\EtudiantFSJESController;
use App\Http\Controllers\EtudiantFSSMController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/index', function () {
    return view('index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [EtudiantController::class, 'redirect'])->name('dashboard');
    Route::get('/inscription-fssm', [EtudiantFSSMController::class, 'create'])->name('gofssm');
    Route::post('/inscriptions-fssm', [EtudiantFSSMController::class, 'store'])->name('storefssm');
    Route::get('/inscription-fsjes', [EtudiantFSJESController::class, 'create'])->name('gofsjes');
    Route::post('/inscriptions-fsjes', [EtudiantFSJESController::class, 'store'])->name('storefsjes');
    Route::get('/inscription-flshm', [EtudiantFLSHMController::class, 'create'])->name('goflshm');
    Route::post('/inscriptions-flshm', [EtudiantFLSHMController::class, 'store'])->name('storeflshm');
});
