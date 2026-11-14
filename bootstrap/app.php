<?php

use App\Http\Middleware\EnforceAccess;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias(['access' => EnforceAccess::class]);
        // Belum login -> halaman login (membawa tujuan semula); sudah login -> dashboard
        $middleware->redirectGuestsTo(fn (Request $r) => route('login', $r->isMethod('GET') ? ['next' => $r->getRequestUri()] : []));
        $middleware->redirectUsersTo(fn () => route('admin.dashboard'));
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
