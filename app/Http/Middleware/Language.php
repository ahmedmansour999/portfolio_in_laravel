<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class Language
{

    public function handle(Request $request, Closure $next): Response
    {

        if (Session::has('locale')) {
            $locale = Session::get('locale');
            App::setLocale($locale);
            Log::info('Locale applied in middleware: ' . $locale);
        } else {
            Log::info('Locale not found in session, defaulting to: ' . App::getLocale());
        }
        return $next($request);
    }
}
