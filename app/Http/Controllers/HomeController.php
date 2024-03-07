<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\VisitorDetectionInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private VisitorDetectionInterface $visitorDetection;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(VisitorDetectionInterface $visitorDetection)
    {
        $this->middleware('auth');
        $this->visitorDetection = $visitorDetection;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $visitorDetections = $this->visitorDetection->GetCount();
        return view('admin.pages.dashboard.index' , compact('visitorDetections'));
    }
}
