<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RateController extends Controller
{
    public function index()
    {
        $apiKey = 'c01bfa69ed2d46eeb741b559f847ebf0';
        $response = Http::get("https://openexchangerates.org/api/latest.json?app_id=$apiKey&symbols=PHP,JPY");
        $exchangeRates = $response->json()['rates'];
        return view('rate', compact('exchangeRates'));
    }
}
