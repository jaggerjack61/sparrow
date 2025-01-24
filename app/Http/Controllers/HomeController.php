<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Pricing;

class HomeController extends Controller
{
    public function index()
    {
        $faqs = Faq::where('status', true)->get();
        $pricings = Pricing::where('status', true)->with('items')->get();
        return view('welcome', compact('faqs', 'pricings'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
