<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // 'peran' dan 'aktif' sengaja TIDAK mass-assignable (cegah eskalasi hak lewat form).
    // Atur lewat forceFill()/forceCreate() di kode tepercaya (seeder, command, admin).
    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'last_login_at' => 'datetime',
            'password' => 'hashed',   // otomatis di-hash (bcrypt) saat di-set
            'aktif' => 'boolean',
        ];
    }

    public function peranLabel(): string
    {
        return config('prodi.roles')[$this->peran] ?? $this->peran;
    }
}
