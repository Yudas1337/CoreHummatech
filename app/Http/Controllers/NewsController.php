<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\CategoryNewsInterface;
use App\Contracts\Interfaces\NewsCategoryInterface;
use App\Contracts\Interfaces\NewsImageInterface;
use App\Contracts\Interfaces\NewsInterface;
use App\Helpers\ResponseHelper;
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

    private NewsImageInterface $newsImage;
    private NewsCategoryInterface $newsCategory;

    public function __construct(NewsInterface $news, NewsService $newsService, CategoryNewsInterface $category, NewsCategoryInterface $newsCategoryInterface, NewsImageInterface $newsImageInterface)
    {
        $this->newsImage = $newsImageInterface;
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
     */
    public function store(StoreNewsRequest $request)
    {
        $data = $this->newsService->store($request);
        $newsId = $this->news->store($data)->id;
        foreach ($data['image'] as $img) {
            $this->newsImage->store([
                'news_id' => $newsId,
                'photo' => $img,
            ]);
        }
        foreach ($data['category'] as $ctgr) {
            $this->newsCategory->store([
                'news_id' => $newsId,
                'category_id' => $ctgr,
            ]);
        }
        return ResponseHelper::success(null , trans('alert.add_success'));
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

    public function news ()
    {
        $newss = $this->news->get();
        return view('landing.news.index' , compact('newss'));
    }

    public function showNews($slugnews)
    {
        $newss = $this->news->slug($slugnews);
        return view('landing.news.detail' , compact('newss'));
    }
}
