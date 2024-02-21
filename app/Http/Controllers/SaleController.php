<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\SaleInterface;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Models\Sale;
use App\Services\SaleService;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    private SaleInterface $sale;
    private SaleService $service;

    public function __construct(SaleInterface $sale, SaleService $saleService)
    {
        $this->service = $saleService;
        $this->sale = $sale;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = $this->sale->get();
        return view('admin.pages.sale.index', compact('sales'));
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
    public function store(StoreSaleRequest $request)
    {
        $data = $this->service->store($request);
        $this->sale->store($data);
        return back()->with('success' , 'Penjualan berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        return view('admin.pages.sale.detail', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSaleRequest $request, Sale $sale)
    {
        $data = $this->service->update($sale, $request);
        $this->sale->update($sale->id, $data);

        return back()->with('success', 'Penjualan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale)
    {
        if (!$this->sale->delete($sale->id)) {
            return back()->with('error', 'Penjualan Gagal Di Hapus');
        }

        $this->service->remove($sale->image);
        return back()->with('success' , 'Penjualan Berhasil Di Hapus');
    }
}