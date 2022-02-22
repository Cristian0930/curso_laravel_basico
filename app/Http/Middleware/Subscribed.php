<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Subscribed
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->user()->subscribed) {
            return abort(403, 'Sin suscripción activa');
        }

        return $next($request);
    }
}
