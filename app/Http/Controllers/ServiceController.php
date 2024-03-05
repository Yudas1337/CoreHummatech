<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\FaqInterface;
use App\Contracts\Interfaces\ProductInterface;
use App\Contracts\Interfaces\ServiceInterface;
use App\Contracts\Interfaces\TestimonialInterface;
use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\MisionItems;
use App\Models\Product;
use App\Models\Termscondition;
use App\Services\ServiceService;

class ServiceController extends Controller
{
    private ServiceInterface $service;
    private ServiceService $serviceService;
    private Termscondition $termscondition;
    private TestimonialInterface $testimonial;
    private FaqInterface $faq;

    public function __construct(ServiceInterface $service , ServiceService $serviceService, Termscondition $termscondition, TestimonialInterface $testimonial, FaqInterface $faq)
    {
        $this->service = $service ;
        $this->termscondition = $termscondition;
        $this->serviceService = $serviceService;
        $this->testimonial = $testimonial;
        $this->faq = $faq;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = $this->service->get();
        return view('admin.pages.service.index' , compact('services'));
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
        $data = $this->serviceService->store($request);
        // dd($data);
        $this->service->store($data);
        return back()->with('success' , 'Layanan berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        $services = $this->service->show($service->id);
        $products = Product::where('service_id' , $service->id)->get();
        $termsconditions = $this->termscondition->where('service_id' , $service->id)->get();
        $testimonials = $this->testimonial->get()->where('service_id' , $service->id);
        $mision = MisionItems::where('service_id' , $service->id)->get();
        $faqs = $this->faq->get()->where('service_id' , $service->id);


        return view('admin.pages.service.detail' , compact('services' , 'products', 'termsconditions', 'testimonials', 'mision', 'faqs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }
    public function ShowService($slug)
    {
        $slugs = $this->service->slug($slug);
        $services = $this->service->get();
        return view('landing.service.service-detail', compact('slugs' , 'services'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $data = $this->serviceService->update($service, $request);
        $this->service->update($service->id, $data);

        return back()->with('success', 'Penjualan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        if (!$this->service->delete($service->id)) {
            return back()->with('error', 'Penjualan Gagal Di Hapus');
        }

        $this->serviceService->remove($service->image);
        return back()->with('success' , 'Penjualan Berhasil Di Hapus');
    }


}
