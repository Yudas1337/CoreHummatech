<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\ServiceInterface;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use App\Services\ServiceService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private ServiceInterface $services;
    private ServiceService $service;

    public function __construct(ServiceInterface $services, ServiceService $servicesService)
    {
        $this->service = $servicesService;
        $this->services = $services;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = $this->services->get();
        return view('admin.pages.service.index', compact('services'));
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
    public function store(StoreServiceRequest $request)
    {
        $data = $this->service->store($request);
        $this->services->store($data);
        return back()->with('success' , 'Data layanan berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $services)
    {
        return view('admin.pages.sale.detail', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $services)
    {
        $data = $this->service->update($services, $request);
        $this->services->update($services->id, $data);

        return back()->with('success', 'Penjualan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $services)
    {
        if (!$this->services->delete($services->id)) {
            return back()->with('error', 'Penjualan Gagal Di Hapus');
        }

        $this->service->remove($services->image);
        return back()->with('success' , 'Penjualan Berhasil Di Hapus');
    }
}
