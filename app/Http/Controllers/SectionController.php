<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\SectionInterface;
use App\Models\Section;
use App\Http\Requests\StoreSectionRequest;
use App\Http\Requests\UpdateSectionRequest;
use App\Services\SectionService;

class SectionController extends Controller
{
    private SectionInterface $section;
    private SectionService $service ;

    public function __construct(SectionInterface $section , SectionService $service)
    {
        $this->section = $section;
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = $this->section->get();
        return view('admin.pages.hero-section.index' , compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.hero-section.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSectionRequest $request)
    {
        $data = $this->service->store($request);
        $this->section->store($data);
        return redirect()->route('hero.section')->with('success' , 'Hero Section berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section)
    {
        return view('admin.pages.hero-section.edit', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSectionRequest $request, Section $section)
    {
        $this->section->update($section->id, $this->service->update($section, $request));
        return to_route('hero.section')->with('succes', 'Hero section berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        if (!$this->section->delete($section->id)) {
            return back()->with('error', 'Hero section Gagal Di Hapus');
        }

        $this->service->remove($section->image);
        return back()->with('success' , 'Hero section Berhasil Di Hapus');
    }
}
