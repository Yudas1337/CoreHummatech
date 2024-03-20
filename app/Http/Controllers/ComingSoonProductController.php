<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\ComingSoonProductInterface;
use App\Http\Requests\StoreComingSoonProductRequest;
use App\Http\Requests\UpdateComingSoonProductRequest;
use App\Models\ComingSoonProduct;
use App\Services\ComingSoonProductService;
use Illuminate\Http\Request;

class ComingSoonProductController extends Controller
{
    private ComingSoonProductInterface $model;
    private ComingSoonProductService $service;

    public function __construct(ComingSoonProductInterface $model, ComingSoonProductService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comingProducts = $this->model->get();
        return view('', compact('comingProducts'));
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
    public function store(StoreComingSoonProductRequest $request)
    {
        $data = $this->service->store($request);
        $this->model->store($data);
        return back()->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(ComingSoonProduct $comingSoonProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ComingSoonProduct $comingSoonProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComingSoonProductRequest $request, ComingSoonProduct $comingSoonProduct)
    {
        $data = $this->service->update($comingSoonProduct, $request);
        $this->model->update($comingSoonProduct->id , $data);
        return back()->with('success','Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ComingSoonProduct $comingSoonProduct)
    {
        $this->model->delete($comingSoonProduct->id);
        return back()->with('success','Data berhasil dihapus');
    }
}
