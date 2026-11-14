<?php

namespace App\Http\Middleware;

use App\Support\Access;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

/**
 * Gerbang tunggal PB-04. Dipasang SETELAH middleware 'auth' pada seluruh grup /admin.
 * - akun nonaktif -> sesi dicabut
 * - peran tanpa hak (atau route tak terdaftar) -> 403
 */
class EnforceAccess
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        if (!$user || !$user->aktif) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('login');
        }

        $route = $request->route()?->getName();
        $slug = $request->route('slug');
        if ($route === 'admin.segera' && !isset(config('prodi.segera')[$slug])) {
            abort(404);
        }
        if (!Access::allows($user->peran, $route, $slug)) {
            abort(403);
        }

        $response = $next($request);
        // Tombol Back setelah logout tidak boleh menampilkan halaman admin dari cache
        $response->headers->set('Cache-Control', 'no-store, private');
        return $response;
    }
}
