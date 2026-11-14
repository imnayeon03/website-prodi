<?php

namespace App\Support;

use App\Models\User;

class Menu
{
    /** Menu admin yang sudah difilter sesuai peran: ['Bagian' => [['label','href','current'], ...]] */
    public static function admin(User $user): array
    {
        $out = [];
        foreach (config('prodi.admin_menu') as $section => $items) {
            $shown = [];
            foreach ($items as [$label, $route, $params]) {
                if (!Access::allows($user->peran, $route, $params['slug'] ?? null)) {
                    continue;
                }
                $current = request()->routeIs($route)
                    && (!isset($params['slug']) || request()->route('slug') === $params['slug']);
                $shown[] = ['label' => $label, 'href' => route($route, $params), 'current' => $current];
            }
            if ($shown) {
                $out[$section] = $shown;
            }
        }
        return $out;
    }

    public static function public(): array
    {
        return array_map(fn ($m) => [
            'label' => $m[0],
            'href' => route($m[1]),
            'current' => request()->routeIs($m[1], ...$m[2]),
        ], config('prodi.public_menu'));
    }
}
