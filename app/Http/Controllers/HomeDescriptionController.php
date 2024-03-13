<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\HomeInteface;
use App\Contracts\Repositories\HomeRepository;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeDescriptionController extends Controller
{
    private HomeInteface $home;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(HomeInteface $home)
    {
        $this->middleware('auth');
        $this->home = $home;
    }

    public function index()
    {
        $home = $this->home->get();
        return view('', compact('home'));
    }

    public function store(Request $request)
    {
        $this->home->store($request->validated());
        return redirect()->back()->with('success', 'Berhasil ditambahkan');
    }

    public function update(Request $request, Home $home)
    {
        $this->home->update($home->id, $request->validated());
        return redirect()->back()->with('success', 'Berhasil diperbarui');
    }

    public function destroy(Home $home)
    {
        $this->home->delete($home->id);
        return redirect()->back()->with('success', 'Berhasil dihapus');
    }
}
