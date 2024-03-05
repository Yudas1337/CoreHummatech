<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\ProfileInterface;
use App\Contracts\Interfaces\TeamInterface;
use App\Contracts\Interfaces\VisionAndMisionInterface;
use App\Models\MisionItems;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    private ProfileInterface $profile;
    private VisionAndMisionInterface $visionMision;
    private TeamInterface $ourTeams;

    public function __construct(ProfileInterface $profile, VisionAndMisionInterface $visionMision, TeamInterface $teams)
    {
        $this->profile = $profile;
        $this->visionMision = $visionMision;
        $this->ourTeams = $teams;
    }

    public function index(Request $request)
    {
        $profiles = $this->profile->get();
        $visionMisions = $this->visionMision->get();
        $missions = MisionItems::all();
        $teams = $this->ourTeams->customPaginate($request, 9);

        return view('landing.about' , compact('profiles', 'visionMisions', 'missions', 'teams'));
    }
}
