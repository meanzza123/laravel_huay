<?php

namespace App\Http\Middleware;

use Closure;

class IsMember
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        if (auth()->user()->isAdmin()) {
            return $next($request);
        }
        else {
            abort(403, 'Unauthorized action.');
        }
    }
}
