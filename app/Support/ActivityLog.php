<?php

namespace App\Support;

use Illuminate\Support\Facades\DB;

class ActivityLog
{
    public static function record(?int $userId, string $aksi, string $modul, ?int $objekId = null, ?string $keterangan = null): void
    {
        DB::table('log_aktivitas')->insert([
            'user_id' => $userId, 'aksi' => $aksi, 'modul' => $modul,
            'objek_id' => $objekId, 'keterangan' => $keterangan, 'waktu' => now(),
        ]);
    }
}
