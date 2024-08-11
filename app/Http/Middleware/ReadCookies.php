<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;

class ReadCookies
{
    public function handle($request, Closure $next)
    {
        $lang = Cookie::get('lang');
        // اقتران قيمة الكوكيز بالمتغير العام للغة في التطبيق
        app()->setLocale($lang);

        return $next($request);
    }
}
