<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class Localization
{
    public function handle($request, Closure $next)
    {
        $locale = session('locale', 'en'); // Ambil dari session, atau default ke 'en'
        App::setLocale($locale);

        return $next($request);
    }
}