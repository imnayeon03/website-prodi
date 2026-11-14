<?php

namespace App\Support;

class Access
{
    public static function allows(string $role, ?string $route, ?string $slug = null): bool
    {
        if ($route === 'admin.segera' && $slug !== null) {
            $m = config('prodi.segera')[$slug] ?? null;
            return $m !== null && in_array($role, $m['roles'], true);
        }
        return in_array($role, config('prodi.access')[$route] ?? [], true);
    }
}
