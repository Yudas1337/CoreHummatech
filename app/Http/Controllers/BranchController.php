<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\BranchInterface;
use App\Models\Branch;
use App\Http\Requests\StoreBranchRequest;
use App\Http\Requests\UpdateBranchRequest;
use App\Services\BranchService;

class BranchController extends Controller
{
    private BranchInterface $branch;
    private BranchService $service;
    public function __construct(BranchInterface $branch, BranchService $service)
    {
        $this->branch = $branch;
        $this->service = $service;
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $branchs = $this->branch->get();

        return view('admin.pages.branch.index' , compact('branchs'));
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
    public function store(StoreBranchRequest $request)
    {
        $this->branch->store($request->validated());
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branch $branch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBranchRequest $request, Branch $branch)
    {
        $data = $this->service->updatecenter($request, $branch);
        $this->branch->update($branch->id, $data);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branch $branch)
    {
        $this->branch->delete($branch->id);
        return back();
    }
}
