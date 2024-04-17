<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function market(Request $request)
    {
        return view('content', ['market', 'test' => true]);
    }

    public function contacts(Request $request)
    {
        return view('content', ['contacts']);
    }

    public function faq(Request $request)
    {
        return view('content', ['faq']);
    }

    public function works(Request $request)
    {
        return view('content', ['works']);
    }

    public function mnogo(Request $request)
    {
        return view('content', ['mnogo']);
    }

    public function guarantees(Request $request)
    {
        return view('content', ['guarantees']);
    }

    public function blog(Request $request)
    {
        return view('content', ['blog']);
    }

    public function sell(Request $request)
    {
        return view('content', ['sell']);
    }

    public function reviews(Request $request)
    {
        return view('content', ['reviews']);
    }

    public function rules(Request $request)
    {
        return view('content', ['rules']);
    }

    public function oferta(Request $request)
    {
        return view('content', ['oferta']);
    }

    public function privacy_policy(Request $request)
    {
        return view('content', ['privacy_policy']);
    }

    public function inventory(Request $request)
    {
        return view('content', ['inventory']);
    }

    public function profile(Request $request)
    {
        return view('content', ['profile']);
    }

    public function security(Request $request)
    {
        return view('content', ['security']);
    }

    public function referrals(Request $request)
    {
        return view('content', ['referrals']);
    }
}
