<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Data referensi (aman di semua lingkungan)
        foreach ([['AIDS', 'AI & Sains Data'], ['RPL', 'Rekayasa Perangkat Lunak'],
                  ['JKS', 'Jaringan & Keamanan'], ['SCI', 'Sistem Cerdas & IoT']] as [$kode, $nama]) {
            DB::table('kelompok_keahlian')->insertOrIgnore(['kode' => $kode, 'nama' => $nama]);
        }
        DB::table('profil_prodi')->insertOrIgnore(['id' => 1, 'visi' => '']);

        if (app()->environment('production')) {
            $this->command?->warn('Akun demo tidak dibuat di production. Pakai: php artisan prodi:buat-user');
            return;
        }

        $password = env('SEED_PASSWORD', 'Prodi#2026');
        $akun = [
            ['Super Admin', 'superadmin@prodi.test', 'super_admin'],
            ['Admin Prodi', 'adminprodi@prodi.test', 'admin_prodi'],
            ['Editor Berita', 'editor@prodi.test', 'editor'],
        ];
        foreach ($akun as [$nama, $email, $peran]) {
            $this->buatUser($nama, $email, $peran, $password);
        }

        // Akun dosen demo terhubung ke satu data dosen
        if (!User::where('email', 'dosen@prodi.test')->exists()) {
            $dosenId = DB::table('dosen')->insertGetId([
                'nama' => 'Dosen Demo', 'gelar_belakang' => 'M.Kom.', 'nidn' => '0000000001',
                'email' => 'dosen@prodi.test', 'status_kepegawaian' => 'tetap', 'jabatan_fungsional' => 'Lektor',
                'kelompok_keahlian_id' => DB::table('kelompok_keahlian')->orderBy('id')->value('id'),
                'created_at' => now(), 'updated_at' => now(),
            ]);
            $this->buatUser('Dosen Demo', 'dosen@prodi.test', 'dosen', $password, $dosenId);
        }

        $this->command?->info("Akun demo dibuat (kata sandi: {$password}): superadmin@, adminprodi@, editor@, dosen@ + prodi.test");
    }

    private function buatUser(string $nama, string $email, string $peran, string $password, ?int $dosenId = null): void
    {
        if (User::where('email', $email)->exists()) {
            return;
        }
        // forceCreate: 'peran'/'aktif' tidak mass-assignable. Password di-hash oleh cast 'hashed'.
        User::forceCreate([
            'name' => $nama, 'email' => $email, 'password' => $password,
            'peran' => $peran, 'aktif' => true, 'dosen_id' => $dosenId,
        ]);
    }
}
