<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\PositionInterface;
use App\Contracts\Interfaces\TeamInterface;
use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Services\TeamService;

class TeamController extends Controller
{
    private TeamInterface $team ;
    private PositionInterface $position ;
    private TeamService $service ;

    public function __construct(TeamInterface $team , PositionInterface $position , TeamService $service)
    {
        $this->team = $team;
        $this->position = $position;
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = $this->team->get();
        $positions = $this->position->get();
        return view('admin.pages.teams.index' , compact('teams' , 'positions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        $data = $this->service->store($request);
        $this->team->store($data);
        return back()->with('success' , 'Team berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
    //  dd($request->all());

        $data = $this->service->update($team, $request);
        $this->team->update($team->id, $data);
        return back()->with('success' , 'Team Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        if (!$this->team->delete($team->id)) {
            return back()->with('error', 'Testimoni Gagal Di Hapus');
        }
        $this->service->remove($team->image);
        return back()->with('success' , 'Testimoni Berhasil Di Hapus');
    }
}
