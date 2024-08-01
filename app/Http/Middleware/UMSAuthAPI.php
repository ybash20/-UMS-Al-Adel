<?php

namespace App\Http\Middleware;

use Closure;
use App\Helpers\UMS;

class UMSAuthAPI
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        UMS::authAPI();

        return $next($request);
    }
}
