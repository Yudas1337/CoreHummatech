<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use DerekCodes\TurnstileLaravel\TurnstileLaravel;

class ContactUsController extends Controller
{
    /**
     * Handle the view of contact-us
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index(): View
    {
        return view('landing.contact');
    }

    /**
     * Handle the form submission
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $turnstile = new TurnstileLaravel;
        $turnstile->validate($request->input('captcha'));
    }
}
