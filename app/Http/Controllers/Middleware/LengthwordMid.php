<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LengthwordMid
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('lengthword')) {

            return redirect()->route('lengthword');
        }

        return $next($request);
    }
}
