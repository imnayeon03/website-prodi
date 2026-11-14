<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BuatUser extends Command
{
    protected $signature = 'prodi:buat-user {--nama=} {--email=} {--peran=}';
    protected $description = 'Buat akun pengguna (aman dipakai di production)';

    public function handle(): int
    {
        $roles = array_keys(config('prodi.roles'));
        $nama = $this->option('nama') ?: $this->ask('Nama');
        $email = $this->option('email') ?: $this->ask('Email');
        $peran = $this->option('peran') ?: $this->choice('Peran', $roles);
        $password = $this->secret('Kata sandi');

        $v = Validator::make(compact('nama', 'email', 'peran', 'password'), [
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'peran' => ['required', Rule::in($roles)],
            'password' => ['required', 'string', 'min:' . config('prodi.min_password_length')],
        ]);
        if ($v->fails()) {
            foreach ($v->errors()->all() as $e) {
                $this->error($e);
            }
            return self::FAILURE;
        }

        User::forceCreate(['name' => $nama, 'email' => strtolower($email), 'password' => $password,
                           'peran' => $peran, 'aktif' => true]);
        $this->info('Akun dibuat.');
        return self::SUCCESS;
    }
}
