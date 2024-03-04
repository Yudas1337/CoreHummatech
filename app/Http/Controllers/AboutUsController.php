<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\ProfileInterface;
use App\Contracts\Interfaces\VisionAndMisionInterface;
use App\Models\MisionItems;

class AboutUsController extends Controller
{
    private ProfileInterface $profile;
    private VisionAndMisionInterface $visionMision;
    public function __construct(ProfileInterface $profile, VisionAndMisionInterface $visionMision,)
    {
        $this->profile = $profile;
        $this->visionMision = $visionMision;
    }

    public function index()
    {
        $profiles = $this->profile->get();
        $visionMisions = $this->visionMision->get();
        $missions = MisionItems::all();
        return view('landing.about' , compact('profiles', 'visionMisions', 'missions'));
    }
}