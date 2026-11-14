<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    private const PW = 'Rahasia#123';

    private function akun(string $peran, bool $aktif = true): User
    {
        return User::forceCreate(['name' => ucfirst($peran), 'email' => "{$peran}@t.test",
            'password' => self::PW, 'peran' => $peran, 'aktif' => $aktif]);
    }

    private function masuk(string $peran, array $extra = [])
    {
        $this->akun($peran);
        return $this->post('/login', ['email' => "{$peran}@t.test", 'password' => self::PW] + $extra);
    }

    /* ---------- PB-01 ---------- */
    public function test_tabel_utama_ada(): void
    {
        foreach (['users', 'dosen', 'mahasiswa', 'alumni', 'kegiatan', 'penelitian', 'tracer_jawaban',
                  'lowongan', 'log_aktivitas', 'profil_prodi_versi'] as $t) {
            $this->assertTrue(Schema::hasTable($t), "Tabel {$t} tidak ada");
        }
    }

    /* ---------- PB-04 ---------- */
    public function test_tamu_diarahkan_ke_login(): void
    {
        $this->get('/admin')->assertRedirect(route('login', ['next' => '/admin']));
        $this->get('/admin/dosen')->assertRedirect(route('login', ['next' => '/admin/dosen']));
        $this->get('/admin/segera/pengguna')->assertRedirect();
        $this->get('/admin-dosen.html')->assertRedirect('/admin/dosen');   // lalu dicegat gerbang login
    }

    public function test_matriks_peran(): void
    {
        $cases = [
            'editor' => ['/admin/kegiatan' => 200, '/admin/dosen' => 403, '/admin/profil' => 403, '/admin/segera/pengguna' => 403],
            'dosen' => ['/admin/dosen' => 200, '/admin/riset' => 200, '/admin/mahasiswa' => 403, '/admin/kegiatan' => 403],
            'admin_prodi' => ['/admin/profil' => 200, '/admin/alumni' => 200, '/admin/segera/pengguna' => 403],
            'super_admin' => ['/admin/segera/pengguna' => 200, '/admin/mahasiswa' => 200],
        ];
        foreach ($cases as $peran => $paths) {
            $user = $this->akun($peran);
            foreach ($paths as $path => $status) {
                $this->actingAs($user)->get($path)->assertStatus($status);
            }
        }
    }

    public function test_slug_tak_dikenal_404(): void
    {
        $this->actingAs($this->akun('super_admin'))->get('/admin/segera/tidak-ada')->assertNotFound();
    }

    public function test_route_admin_tak_terdaftar_ditolak_default(): void
    {
        Route::middleware(['web', 'auth', 'access'])->get('/admin/baru', fn () => 'x')->name('admin.baru');
        $this->actingAs($this->akun('super_admin'))->get('/admin/baru')->assertForbidden();
    }

    public function test_halaman_admin_no_store(): void
    {
        $r = $this->actingAs($this->akun('super_admin'))->get('/admin');
        $this->assertStringContainsString('no-store', $r->headers->get('Cache-Control'));
    }

    public function test_halaman_publik_terbuka(): void
    {
        foreach (['/', '/profil', '/dosen', '/dosen/detail', '/mahasiswa', '/kegiatan', '/riset', '/alumni', '/login'] as $p) {
            $this->get($p)->assertOk();
        }
    }

    /* ---------- PB-03 ---------- */
    public function test_login_sukses_dan_logout(): void
    {
        $this->masuk('admin_prodi')->assertRedirect(route('admin.dashboard'));
        $this->assertAuthenticated();
        $this->get('/admin')->assertOk()->assertSee('Admin Prodi');
        $this->post('/logout')->assertRedirect(route('login'));
        $this->assertGuest();
        $this->get('/admin')->assertRedirect();
    }

    public function test_password_tersimpan_sebagai_hash(): void
    {
        $u = $this->akun('dosen');
        $this->assertNotSame(self::PW, $u->fresh()->getRawOriginal('password'));
        $this->assertTrue(Hash::check(self::PW, $u->fresh()->password));
    }

    public function test_salah_password_pesan_generik(): void
    {
        $this->akun('dosen');
        $this->post('/login', ['email' => 'dosen@t.test', 'password' => 'salah'])
            ->assertSessionHasErrors(['email' => 'Email atau kata sandi salah.']);
        $this->post('/login', ['email' => 'tidakada@t.test', 'password' => 'salah'])
            ->assertSessionHasErrors(['email' => 'Email atau kata sandi salah.']);
        $this->assertGuest();
    }

    public function test_terkunci_setelah_5_gagal(): void
    {
        $this->akun('dosen');
        for ($i = 0; $i < 5; $i++) {
            $this->post('/login', ['email' => 'dosen@t.test', 'password' => 'salah']);
        }
        $this->post('/login', ['email' => 'dosen@t.test', 'password' => self::PW])->assertSessionHasErrors('email');
        $this->assertGuest();
        $this->assertStringContainsString('Terlalu banyak', session('errors')->first('email'));
    }

    public function test_akun_nonaktif_ditolak(): void
    {
        $this->akun('dosen', aktif: false);
        $this->post('/login', ['email' => 'dosen@t.test', 'password' => self::PW])->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    public function test_sesi_dicabut_saat_akun_dinonaktifkan(): void
    {
        $this->masuk('admin_prodi');
        User::where('email', 'admin_prodi@t.test')->update(['aktif' => false]);
        $this->app['auth']->forgetGuards();
        $this->get('/admin')->assertRedirect(route('login'));
    }

    public function test_next_internal_dipakai(): void
    {
        $this->masuk('admin_prodi', ['next' => '/admin/dosen'])->assertRedirect(url('/admin/dosen'));
    }

    public function test_open_redirect_https_diblok(): void
    {
        $this->masuk('admin_prodi', ['next' => 'https://jahat.example/'])->assertRedirect(route('admin.dashboard'));
    }

    public function test_open_redirect_protocol_relative_diblok(): void
    {
        $this->masuk('admin_prodi', ['next' => '//jahat.example'])->assertRedirect(route('admin.dashboard'));
    }

    public function test_sudah_login_tidak_bisa_buka_halaman_login(): void
    {
        $this->masuk('dosen');
        $this->get('/login')->assertRedirect(route('admin.dashboard'));
    }

    public function test_menu_sesuai_peran(): void
    {
        $this->actingAs($this->akun('editor'))->get('/admin')
            ->assertSee('Kegiatan')
            ->assertDontSee('Data Dosen')
            ->assertDontSee('Pengguna & Hak Akses');
    }

    /* ---------- PB-02 ---------- */
    public function test_header_footer_komponen_tunggal_dan_menu_aktif(): void
    {
        foreach (['/', '/profil', '/dosen', '/mahasiswa', '/kegiatan', '/riset', '/alumni'] as $p) {
            $this->get($p)->assertSee('site-footer', false)->assertSee('Menu utama', false);
        }
        $this->get('/dosen')->assertSee('href="' . route('public.dosen') . '" aria-current="page"', false);
    }
}
