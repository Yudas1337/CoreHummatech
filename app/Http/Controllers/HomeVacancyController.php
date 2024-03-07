<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\ProfileInterface;
use App\Contracts\Interfaces\VacancyInterface;
use App\Contracts\Interfaces\WorkFlowInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeVacancyController extends Controller
{
    private VacancyInterface $vacancyData;
    private WorkFlowInterface $workflow;

    /**
     * Constructor for the class.
     *
     * @param VacancyInterface $vacancyInterface the data vacancy from database.
     */
    public function __construct(VacancyInterface $vacancyInterface , WorkFlowInterface $workflow)
    {
        $this->vacancyData = $vacancyInterface;
        $this->workflow = $workflow;
    }

    /**
     * Autorun the controller to view Vacancy Page.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function __invoke(): View
    {
        $workflows = $this->workflow->get();
        $vacancyData = $this->vacancyData->get();

        return view('landing.vacancy.index', compact('vacancyData' ,'workflows'));
    }
}
