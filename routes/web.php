<?php

use App\Http\Controllers\TahunAkademikController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\WilayahDKIController;
use App\Http\Controllers\DokumenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::prefix('admin')->group(function () {
    //dashboard
    Route::get('dashboard', [Controller::class, 'index'])->name('dashboard.index') ;
    
    //wilayah
    Route::get('wilayah-dki', [WilayahDKIController::class, 'index'])->name('wilayah.index');
    Route::get('wilayah-dki-create', [WilayahDKIController::class, 'create'])->name('wilayah.create');
    Route::post('wilayah-dki-post', [WilayahDKIController::class, 'store'])->name('wilayah.store');
    Route::get('wilayah-dki-edit/{id}', [WilayahDKIController::class, 'edit'])->name('wilayah.edit');
    Route::put('wilayah-dki-update/{id}', [WilayahDKIController::class, 'update'])->name('wilayah.update');


    Route::resource('tahun-akademik', TahunAkademikController::class);
    Route::get('tahun-akademik/destroy/{id}', [TahunAkademikController::class, 'destroy'])->name('tahun-akademik.destroy');

    //jurusan module
    Route::get('jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
    Route::get('jurusan-create', [JurusanController::class, 'create'])->name('jurusan.create');
    Route::post('jurusan-store', [JurusanController::class, 'store'])->name('jurusan.store');
    Route::get('jurusan-edit/{id}', [JurusanController::class, 'edit'])->name('jurusan.edit');
    Route::put('jurusan-update/{id}', [JurusanController::class, 'update'])->name('jurusan.update');
    Route::get('jurusan-destroy/{id}', [JurusanController::class, 'destroy'])->name('jurusan.destroy');

    //siswa module
    Route::resource("siswa", SiswaController::class);

    //sekolah PK
    Route::resource('sekolah-pk', SchoolController::class);

    //industri module
    Route::resource('industri', IndustriController::class);

    Route::group(['prefix' => 'data-dokumen'], function () {
        Route::get('/', [DokumenController::class, 'index'])->name('datadokumen.index');
        Route::get('/task/{id}', [DokumenController::class, 'show'])->name('datadokumen.show');
        Route::post('/task/sent', [DokumenController::class, 'store'])->name('datadokumen.store');
    });
});