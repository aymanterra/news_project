<?php

namespace App\Http\Controllers;

use App\Comment;
use App\News;
use App\Http\Resources\CommentResource;
use Illuminate\Http\Request;
use App\Http\Requests\StoreComment;

class CommentController extends Controller
{
    // Authenticated users only can access
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Return Json of a listing of the comments related to certain news.
     *
     * @return \Illuminate\Http\Response
     */
    public function apiIndex(News $news)
    {
        return CommentResource::collection($news->comments);
    }

    /**
     * Display to  admin comments view.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex(News $news)
    {
        //
        return view('admin.comments.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComment $request, News $news)
    {
        // create a new news using the request date and save it 
        $comment = [
            'user_id' => auth()->user()->id,
            'body' => request('body')
        ];
        $news->comments()->create($comment);

        // redirect to the previous page
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function apiUpdate(Comment $comment)
    {
        $comment->update(request(['status_id']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function apiDestroy(Comment $comment)
    {
        //
        $comment->delete();
    }
}
