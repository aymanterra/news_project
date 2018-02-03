<?php

namespace App\Http\Controllers;

use App\News;
use App\Status;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNews;
use App\Http\Requests\UpdateNews;

class NewsController extends Controller
{
    // Authenticated users only can access
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the approved news.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $approvedNews = News::approved();
        return view('user.news.index', compact('approvedNews'));
    }

    /**
     * Display a listing of the resource to admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex()
    {
        //
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.news.create');
    }

    /**
     * Show the form for creating a new resource to admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminCreate()
    {
        //get list of statuses
        $statuses = Status::all();

        return view('admin.news.create', compact('statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNews $request)
    {
        //create new object of News
        $news = new News(request(['title', 'sub_title', 'body']));

        // save this object 
        auth()->user()->news()->save($news);

        return redirect()->route('news');
    }

    /**
     * Store a newly created resource by admin in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function adminStore(StoreNews $request)
    {
        //create new object of News
        $news = new News(request(['title', 'sub_title', 'body', 'status_id']));

        // save this object 
        auth()->user()->news()->save($news);

        return redirect('/admin/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
        return view('user.news.show', compact('news'));
    }

    /**
     * Display the specified resource to admin.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function adminShow(News $news)
    {
        //
        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource to admin.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function adminEdit(News $news)
    {
        //get all statuses
        $statuses = Status::all();
        return view('admin.news.edit', compact('news', 'statuses'));
    }

    /**
     * Update by admin the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function adminUpdate(UpdateNews $request, News $news)
    {
        //
        $news->update(request(['title', 'sub_title', 'body', 'status_id']));

        return redirect('/admin/news');
    }

    /**
     * Remove by admin the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function adminDestroy(News $news)
    {
        //
        $news->delete();

        return redirect('/admin/news');
    }
}
