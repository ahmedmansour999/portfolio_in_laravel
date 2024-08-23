<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log; // Add this import


class LanguageController extends Controller
{

    public function GetLanguage($lang): RedirectResponse
    {

        if (in_array($lang, ['en', 'ar'])) {
            Session::put('locale', $lang);
            
            Log::info('Locale set to: ' . $lang); // Log the set locale
        }

        return redirect()->back();
    }
}
