<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LanguageController extends Controller
{
    // we will create new method
    public function index(Request $request, $locale){
        // set application Locale
        app()->setlocale($locale);
        // get the translated message and show it
        echo trans('language.message');

    }
}