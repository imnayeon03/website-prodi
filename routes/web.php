<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

/* ---------- Publik ---------- */
Route::view('/', 'public.index')->name('public.index');
Route::view('/profil', 'public.profil')->name('public.profil');
Route::view('/dosen', 'public.dosen')->name('public.dosen');
Route::view('/dosen/detail', 'public.dosen-detail')->name('public.dosen_detail'); // PB-07: jadi /dosen/{id}
Route::view('/mahasiswa', 'public.mahasiswa')->name('public.mahasiswa');
Route::view('/kegiatan', 'public.kegiatan')->name('public.kegiatan');
Route::view('/riset', 'public.riset')->name('public.riset');
Route::view('/alumni', 'public.alumni')->name('public.alumni');

/* ---------- Auth ---------- */
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

/* ---------- Admin (PB-04): 'auth' lalu 'access' untuk SELURUH grup ---------- */
Route::prefix('admin')->name('admin.')->middleware(['auth', 'access'])->group(function () {
    Route::view('/', 'admin.dashboard')->name('dashboard');
    Route::view('/profil', 'admin.profil')->name('profil');
    Route::view('/dosen', 'admin.dosen')->name('dosen');
    Route::view('/mahasiswa', 'admin.mahasiswa')->name('mahasiswa');
    Route::view('/riset', 'admin.riset')->name('riset');
    Route::view('/kegiatan', 'admin.kegiatan')->name('kegiatan');
    Route::view('/alumni', 'admin.alumni')->name('alumni');
    Route::get('/segera/{slug}', fn (string $slug) => view('admin.segera', [
        'judul' => config('prodi.segera')[$slug]['label'],
    ]))->name('segera');
});

/* URL prototipe lama (/admin-dosen.html) -> tetap lewat gerbang login */
foreach (['dashboard', 'profil', 'dosen', 'mahasiswa', 'riset', 'kegiatan', 'alumni'] as $n) {
    Route::redirect("/admin-{$n}.html", $n === 'dashboard' ? '/admin' : "/admin/{$n}");
}
