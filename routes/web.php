<?php

use App\Http\Controllers\JournalController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

    Route::get('/', function () { return view('auth.login'); });
    Auth::routes();



Route::middleware('auth')->group(function () {
        Route::get('/admin', function () { return view('admin.index'); })->name('admin.index');
        Route::get('/student', function () { return view('student.index'); })->name('student.index');
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // journal monitoring
        Route::get('/journal/monitoring' , [JournalController::class , 'monitoring'])->name('journal.monitoring');
    // end jornal
    // journal student
        Route::get('/journal' , [JournalController::class , 'index'])->name('journal.index');
        Route::post('/journal/store' , [JournalController::class , 'store'])->name('journal.store');
        Route::put('/journal/update/{journal}' , [JournalController::class , 'update'])->name('journal.update');
        Route::delete('/journal/delete/{journal}' , [JournalController::class , 'destroy'])->name('journal.delete');
    // end journal student
});
