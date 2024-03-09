<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Contracts\Interfaces\BackgroundInterface;
use DerekCodes\TurnstileLaravel\TurnstileLaravel;

class ContactUsController extends Controller
{
    private BackgroundInterface $background;

    public function __construct(BackgroundInterface $background)
    {
        $this->background = $background;
    }
    /**
     * Handle the view of contact-us
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index(): View
    {
        $background = $this->background->getByType('Hubungi Kami');

        return view('landing.contact', compact('background'));
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
