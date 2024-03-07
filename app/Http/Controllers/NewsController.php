<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\CategoryNewsInterface;
use App\Contracts\Interfaces\NewsCategoryInterface;
use App\Contracts\Interfaces\NewsImageInterface;
use App\Contracts\Interfaces\NewsInterface;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\NewsImage;
use App\Services\NewsService;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class NewsController extends Controller
{
    private NewsInterface $news;
    private NewsService $newsService;
    private CategoryNewsInterface $category;
    private NewsCategoryInterface $newsCategory;

    public function __construct(NewsInterface $news, NewsService $newsService, CategoryNewsInterface $category, NewsCategoryInterface $newsCategoryInterface)
    {
        $this->newsCategory = $newsCategoryInterface;
        $this->news = $news;
        $this->newsService = $newsService;
        $this->category = $category;
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
        $categories = $this->category->get();
        return view('admin.pages.news.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @see https://laravel.com/docs/10.x/collections
     */
    public function store(StoreNewsRequest $request)
    {
        $data = $this->newsService->store($request);
        $newsId = $this->news->store($data)->id;

        collect($data['category'])->map(function ($ctgr) use ($newsId) {
            return $this->newsCategory->store([
                'news_id' => $newsId,
                'category_id' => $ctgr,
            ]);
        });

        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        $categories = NewsCategory::where('news_id' , $news->id)->get();
        $newsImages = NewsImage::where('news_id'  , $news->id)->get();
        return view('admin.pages.news.show', compact('news' ,'newsImages' ,'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $categories = $this->category->get();
        return view('admin.pages.news.edit', compact('news', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @see https://laravel.com/docs/10.x/collections
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $data = $this->newsService->update($news, $request);
        $newsId = $news->id;

        $this->news->update($news->id, $data);

        collect($data['category'])->map(function ($ctgr) use ($newsId) {
            return $this->newsCategory->store([
                'news_id' => $newsId,
                'category_id' => $ctgr,
            ]);
        });

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

    public function news (Request $request)
    {
        $newsCategories = $this->category->get();

        if ($request->category) {
            $newses = $this->news->whereHas('newsCategories', function($q) use ($request) {
                $q->whereHas('category', function($q) use($request) {
                    $q->where('slug', $request->category);
                });
            })->paginate(12);
        } else {
            $newses = $this->news->customPaginate($request, 12);
        }

        return view('landing.news.index' , compact('newses', 'newsCategories'));
    }

    public function showNews($slugnews)
    {
        $otherNews = $this->news->latest(5, [['news.slug' , '!=', $slugnews]]);
        $news = $this->news->slug($slugnews);

        return view('landing.news.detail' , compact('news', 'otherNews'));
    }
}
