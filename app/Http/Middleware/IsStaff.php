<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsStaff   
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check() || Auth::user()->role !== \App\Models\User::ROLE_STAFF) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
