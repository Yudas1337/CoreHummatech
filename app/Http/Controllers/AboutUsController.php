<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\ProfileInterface;
use App\Models\Profile;

class AboutUsController extends Controller
{
    private ProfileInterface $profile ;
    public function __construct(Profile $profile)
    {
        $this->profile = $profile;
    }

    public function index()
    {
        $profile = $this->profile->get();
        return view('landing.index' , compact('profile'));
    }

}
