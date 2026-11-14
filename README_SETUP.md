# Website Prodi S1 Informatika — Laravel (Sprint 1: Fondasi + Auth)

PB-01 repo + migrasi + README · PB-02 komponen tunggal · PB-03 login & peran · PB-04 proteksi admin.

> ⚠️ Paket ini ditulis tanpa PHP/Composer di lingkungan penulis, jadi **belum pernah dijalankan**.
> Jalankan `php artisan test` (langkah 5) sebagai verifikasi pertama dan laporkan error apa pun.

## Prasyarat
PHP 8.2+, Composer, dan database (SQLite bawaan Laravel, atau MySQL/PostgreSQL). Laravel 11 atau 12.

## Pasang (paket ini berupa *overlay*, bukan proyek utuh)

```bash
# 1. Proyek Laravel baru
composer create-project laravel/laravel website-prodi
cd website-prodi

# 2. Salin SELURUH isi folder paket ini ke dalam proyek, setuju untuk menimpa file yang sama:
#    bootstrap/app.php, routes/web.php, routes/console.php,
#    app/Providers/AppServiceProvider.php, app/Models/User.php,
#    database/migrations/0001_01_01_000000_create_users_table.php, database/seeders/DatabaseSeeder.php

# 3. Database: SQLite sudah default. Untuk MySQL ubah DB_* di .env, lalu:
php artisan migrate --seed

# 4. Jalankan
php artisan serve          # http://127.0.0.1:8000/login

# 5. Tes otomatis
php artisan test
```

Akun demo (kata sandi `Prodi#2026`): `superadmin@`, `adminprodi@`, `editor@`, `dosen@` + `prodi.test`.

Production: `APP_ENV=production` → seeder tidak membuat akun demo. Buat akun dengan
`php artisan prodi:buat-user`. Jangan lupa `APP_DEBUG=false`.

## Peta file

| Berkas | Fungsi |
|---|---|
| `config/prodi.php` | ★ Peran, hak akses per route, definisi menu — satu-satunya sumber |
| `app/Http/Middleware/EnforceAccess.php` | Gerbang PB-04 (nonaktif → logout, tak berhak → 403, tak terdaftar → 403) |
| `app/Http/Controllers/Auth/LoginController.php` | Login, logout, pembatas percobaan, anti open-redirect |
| `app/Support/{Access,Menu,ActivityLog}.php` | Pengecekan hak, penyusun menu per peran, log aktivitas |
| `resources/views/layouts/*`, `partials/*` | Komponen tunggal header/footer/sidebar |
| `resources/views/public|admin/*` | 15 halaman prototipe yang sudah jadi Blade |
| `database/migrations/*` | Skema lengkap README prototipe bagian 6 |
| `tests/Feature/AuthTest.php` | 19 tes untuk PB-01 s/d PB-04 |

## Menambah halaman admin baru (mis. modul Dosen, Sprint 2)
1. Tambah route di grup `admin` pada `routes/web.php` (beri `->name('admin.xxx')`).
2. Daftarkan peran di `config/prodi.php` → `access`, dan menunya di `admin_menu`.
3. Selesai. Route admin yang **tidak** ada di `access` otomatis 403.

## Keputusan desain
- Kata sandi di-hash otomatis (cast `hashed`, bcrypt). `peran` & `aktif` **tidak** mass-assignable.
- Login: pesan generik, terkunci 15 menit setelah 5 gagal (RateLimiter per email+IP), sesi diregenerasi, `next` hanya path internal.
- Akun nonaktif langsung kehilangan sesi pada request berikutnya.
- Halaman admin dikirim `Cache-Control: no-store`. CSRF bawaan Laravel (`@csrf`).
- URL prototipe lama (`/admin-dosen.html`) dialihkan ke `/admin/dosen` dan tetap lewat login.
- Relasi akun–dosen hanya lewat `users.dosen_id` (tanpa `dosen.user_id`) agar tidak melingkar.
