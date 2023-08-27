<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Article;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth') ;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request, Article $article)
    {
        $_data = $request->validate(['content' => 'required']);
        $comment = Comment::make($request->all());
        $comment->user_id = auth()->user()->id;
        $comment->article_id = $article->id;
        $comment->save();

        $request->session()->flash('success', 'Comment created successfully');
        return redirect()->route('articles.show', ['article' => $article->id]); 

    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
