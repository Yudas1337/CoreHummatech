<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\ProfileInterface;
use App\Contracts\Interfaces\VacancyInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeVacancyController extends Controller
{
    private VacancyInterface $vacancyData;

    /**
     * Constructor for the class.
     *
     * @param VacancyInterface $vacancyInterface the data vacancy from database.
     */
    public function __construct(VacancyInterface $vacancyInterface)
    {
        $this->vacancyData = $vacancyInterface;
    }

    /**
     * Autorun the controller to view Vacancy Page.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function __invoke(): View
    {
        $vacancyData = $this->vacancyData->get();

        return view('landing.vacancy.index', compact('vacancyData'));
    }
}
