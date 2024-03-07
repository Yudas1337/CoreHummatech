<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\CollabMitraInterface;
use App\Contracts\Interfaces\FaqInterface;
use App\Contracts\Interfaces\GaleryImageInterface;
use App\Contracts\Interfaces\GalleryInterface;
use App\Contracts\Interfaces\ProcedureInterface;
use App\Contracts\Interfaces\ProductInterface;
use App\Contracts\Interfaces\ProfileInterface;
use App\Contracts\Interfaces\SaleInterface;
use App\Contracts\Interfaces\ServiceInterface;
use App\Contracts\Interfaces\TestimonialInterface;
use App\Contracts\Repositories\FaqRepository;
use App\Contracts\Repositories\ProductRepository;
use App\Contracts\Repositories\TestimonialRepository;
use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Gallery;
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
    private TestimonialRepository $testimoni;
    private ProductRepository $product;
    private FaqInterface $faq;
    private ProcedureInterface $procedure;
    private SaleInterface $sale;
    private ProfileInterface $profile;
    private CollabMitraInterface $mitras;
    private GaleryImageInterface $galleryImage;
    private GalleryInterface $galery;


    public function __construct(GaleryImageInterface $galleryImage, GalleryInterface $galery, ServiceInterface $service, ServiceService $serviceService, Termscondition $termscondition, TestimonialInterface $testimonial, FaqInterface $faq, ProductRepository $product, ProcedureInterface $procedure, SaleInterface $sale, ProfileInterface $profile, CollabMitraInterface $mitras)
    {
        $this->mitras = $mitras;
        $this->galleryImage = $galleryImage;
        $this->galery = $galery;
        $this->procedure = $procedure;
        $this->service = $service;
        $this->termscondition = $termscondition;
        $this->serviceService = $serviceService;
        $this->testimonial = $testimonial;
        $this->faq = $faq;
        $this->product = $product;
        $this->sale = $sale;
        $this->profile = $profile;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = $this->service->get();
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
        $data = $this->serviceService->store($request);
        // dd($data);
        $this->service->store($data);
        return back()->with('success', 'Layanan berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        $services = $this->service->show($service->id);
        $products = Product::where('service_id', $service->id)->get();
        $termsconditions = $this->termscondition->where('service_id', $service->id)->get();
        $testimonials = $this->testimonial->get()->where('service_id', $service->id);
        $mision = MisionItems::where('service_id', $service->id)->get();
        $faqs = $this->faq->get()->where('service_id', $service->id);


        return view('admin.pages.service.detail', compact('services', 'products', 'termsconditions', 'testimonials', 'mision', 'faqs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }
    public function ShowService($slug, Service $service)
    {
        $slugs = $this->service->slug($slug);
        $services = $this->service->get();
        $products = $this->product->getByServiceId($slugs->id);
        $testimonials = $this->testimonial->getByServiceId($slugs->id);
        $faqs = $this->faq->ServiceProductShow('service_id', $slugs->id);
        $procedures = $this->procedure->getByServiceId($slugs->id);
        $sales = $this->sale->get();
        $profile = $this->profile->First();
        $mitras = $this->mitras->get();
        $galerys = $this->galery->ServiceProductShow('service_id', $slugs->id)->get();
        $galeries = [];

        foreach ($galerys as $galery) {
            $galeries[] = $this->galleryImage->ServiceProductShow('galleries_id', $galery->id)->get();
        }

        // dd($galeries);

        return view('landing.service.service-detail', compact('slugs', 'services', 'products', 'testimonials', 'faqs', 'procedures', 'sales', 'profile', 'mitras', 'galeries'));

        // dd($galeries);
        // dd($profile);

        // dd($procedures);

        return view('landing.service.service-detail', compact('slugs', 'services', 'products', 'testimonials', 'faqs', 'procedures', 'sales', 'profile', 'mitras', 'galeries'));
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
        $this->serviceService->delete($service);
        $this->service->delete($service->id);
        return back()->with('success', 'Penjualan Berhasil Di Hapus');
    }
}
