<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\ProfileInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeVacancyController extends Controller
{
    private ProfileInterface $profile;

    /**
     * Constructor for the class.
     *
     * @param ProfileInterface $profiles the profile data from models.
     */
    public function __construct(ProfileInterface $profiles)
    {
        $this->profile = $profiles;
    }

    /**
     * Autorun the controller to view Vacancy Page.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function __invoke(): View
    {
        $profileData = $this->profile->get();

        return view('landing.vacancy.index', compact('profileData'));
    }
}
