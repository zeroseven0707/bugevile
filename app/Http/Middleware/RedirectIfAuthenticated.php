<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider; // Tambahkan ini untuk mengimpor RouteServiceProvider

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  array  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        // Jika tidak ada guard yang ditentukan, gunakan guard default
        $guards = empty($guards) ? [null] : $guards;

        // Periksa setiap guard
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Redirect ke dashboard admin jika sudah terautentikasi
                return redirect()->route('admin.dashboard'); // Ubah ini
            }
        }

        return $next($request);
    }
}
