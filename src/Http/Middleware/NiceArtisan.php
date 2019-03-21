<?php

namespace TypiCMS\Modules\NiceArtisan\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Gate;

class NiceArtisan
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
        if (Gate::allows('see-niceartisan')) {
            return $next($request);
        }

        return redirect('/login');
    }
}