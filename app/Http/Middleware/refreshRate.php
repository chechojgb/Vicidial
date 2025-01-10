<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class refreshRate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $refreshRate = session('refresh_rate', config('app.refresh_rate')); // Toma de la sesión o usa el valor por defecto

        // Si necesitas usarlo en configuraciones adicionales:
        config(['app.refresh_rate' => $refreshRate]);

        return $next($request);
    }
}
