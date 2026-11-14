<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Support\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Kata sandi wajib diisi.',
        ]);

        $key = Str::lower($data['email']) . '|' . $request->ip();
        if (RateLimiter::tooManyAttempts($key, config('prodi.login_max_attempts'))) {
            $menit = (int) ceil(RateLimiter::availableIn($key) / 60);
            return $this->gagal($request, "Terlalu banyak percobaan gagal. Coba lagi dalam {$menit} menit.");
        }

        // 'aktif' => 1 : akun nonaktif tidak bisa masuk. Pesan error sengaja generik.
        if (!Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'aktif' => 1])) {
            RateLimiter::hit($key, config('prodi.login_lock_minutes') * 60);
            return $this->gagal($request, 'Email atau kata sandi salah.');
        }

        RateLimiter::clear($key);
        $request->session()->regenerate();            // cegah session fixation
        $user = Auth::user();
        $user->forceFill(['last_login_at' => now()])->save();
        ActivityLog::record($user->id, 'login', 'auth', $user->id);

        $next = $this->safeNext($request->input('next'));
        return redirect()->to($next ?? route('admin.dashboard'));
    }

    public function destroy(Request $request)
    {
        ActivityLog::record(Auth::id(), 'logout', 'auth', Auth::id());
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('ok', 'Anda telah keluar.');
    }

    private function gagal(Request $request, string $pesan)
    {
        return back()->withInput($request->only('email', 'next'))->withErrors(['email' => $pesan]);
    }

    /** Anti open-redirect: hanya path internal yang diterima. */
    private function safeNext(?string $next): ?string
    {
        if (!$next || !str_starts_with($next, '/') || str_starts_with($next, '//') || str_contains($next, '\\')) {
            return null;
        }
        return $next;
    }
}
