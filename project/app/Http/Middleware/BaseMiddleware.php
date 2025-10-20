<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BaseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Str::contains($request->path(), 'authenticated')) {
            session(['show_navbar_footer' => false]);
        } else {
            if (!session()->has('show_navbar_footer')) {
                session(['show_navbar_footer' => true]);
            }
        }

        return $next($request);
    }
}
