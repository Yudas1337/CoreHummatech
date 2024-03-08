<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\BackgroundInterface;
use App\Contracts\Interfaces\LogoInterface;
use App\Contracts\Interfaces\ProfileInterface;
use App\Contracts\Interfaces\StructureInterface;
use App\Contracts\Interfaces\TeamInterface;
use App\Contracts\Interfaces\VisionAndMisionInterface;
use App\Models\MisionItems;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    private ProfileInterface $profile;
    private VisionAndMisionInterface $visionMision;
    private TeamInterface $ourTeams;
    private StructureInterface $imageStructure;
    private LogoInterface $logo;
    private BackgroundInterface $background;

    public function __construct(ProfileInterface $profile, VisionAndMisionInterface $visionMision, StructureInterface $imageStructureOrganization, TeamInterface $teams, LogoInterface $logo, BackgroundInterface $background)
    {
        $this->logo = $logo;
        $this->profile = $profile;
        $this->visionMision = $visionMision;
        $this->ourTeams = $teams;
        $this->imageStructure = $imageStructureOrganization;
        $this->background = $background;
    }

    public function index(Request $request)
    {
        $profiles = $this->profile->get();
        $visionMisions = $this->visionMision->get();
        $missions = MisionItems::all();
        $teams = $this->ourTeams->customPaginate($request, 9);
        $imageStructures = $this->imageStructure->get();
        $logos = $this->logo->get();
        $background = $this->background->getByType('Tentang Kami');

        return view('landing.about' , compact('profiles', 'visionMisions', 'missions', 'teams', 'imageStructures', 'logos', 'background'));
    }
}
