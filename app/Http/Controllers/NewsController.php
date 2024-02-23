<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\CategoryNewsInterface;
use App\Contracts\Interfaces\NewsInterface;
use App\Http\Requests\StoreNewsRequest;
use App\Models\News;
use App\Services\NewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private NewsInterface $news;
    private NewsService $newsService;
    private CategoryNewsInterface $newsCategory;

    public function __construct(NewsInterface $news, NewsService $newsService, CategoryNewsInterface $newsCategory)
    {
        $this->news = $news;
        $this->newsService = $newsService;
        $this->newsCategory = $newsCategory;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = $this->news->get();
        return view('admin.pages.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->newsCategory->get();
        return view('admin.pages.news.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
