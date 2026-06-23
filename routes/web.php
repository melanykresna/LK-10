<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;

$loginController = function () {
    if (Auth::check()) {
        return redirect()->route('mahasiswa.index');
    }
    return view('auth.login');
};

Route::get('/', $loginController);
Route::get('/auth/login', $loginController)->name('login');
Route::get('/login-page', $loginController)->name('login-page');

Route::get('/auth/redirect', [AuthController::class, 'login'])->name('auth.redirect');
Route::get('/auth/callback', [AuthController::class, 'callback'])->name('auth.callback');
Route::post('/auth/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::resource('mahasiswa', MahasiswaController::class);
    
    // Endpoint JSON untuk mengambil data user yang sedang login
    Route::get('/api/user', function () {
        return response()->json([
            'success' => true,
            'message' => 'Data user yang login berhasil diambil',
            'data' => Auth::user()
        ]);
    });
});