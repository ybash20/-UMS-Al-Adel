<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLanguage($locale)
    {
        session(['locale' => $locale]);

        // يمكنك إضافة المزيد من العمليات هنا...

        return redirect()->back();
    }
}