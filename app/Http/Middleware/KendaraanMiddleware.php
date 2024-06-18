<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class KendaraanMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {

        if (Auth::user()->role == $role) {
            return $next($request);
        }

        return redirect()->back()->with('error', 'Anda tidak memiliki akses');
        
        if (Gate::denies('admin')) {
            abort(403);
        }
    }
}
