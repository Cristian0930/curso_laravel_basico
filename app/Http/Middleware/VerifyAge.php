<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyAge
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->get('age') < 18) {
            return redirect('guidelines');
        }

        return $next($request);
    }
}
