<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\CategoryNewsInterface;
use App\Contracts\Interfaces\NewsInterface;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;
use App\Services\NewsService;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

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
    public function index(Request $request)
    {
        $news = $this->news->customPaginate($request, 12);
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
        $data = $this->newsService->store($request);
        $this->news->store($data);
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('admin.pages.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $categories = $this->newsCategory->get();
        return view('admin.pages.news.edit', compact('news', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $data = $this->newsService->update($news, $request);
        $this->news->update($news->id, $data);
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $this->news->delete($news->id);
        return back();
    }
}
