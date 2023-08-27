@extends('layouts.base')

@section('title', 'Article Details')

@section('content')
    <h4><strong>{{ $article->name }}</strong></h4>
    <div class="p-3">
        {{ $article->content }} 
    </div>
    <p>
        Created By <i><strong>{{ $article->user->name }}</strong></i> At {{ $article->created_at }}
    </p>

    <div class="mt-5">
        <p><Strong>Comments</Strong></p>
        @if (count($article->comments))
            <ul>
                @foreach ($article->comments as $comment)
                   <li>
                        <div>
                            <p>
                                {{ $comment->content }} <br>
                                <small>
                                    <strong>
                                        <i>Created By: {{ $comment->user->name }}</i>
                                    </strong> At {{ $comment->created_at }} 
                                </small> 
                            </p>
                        </div>
                    </li> 
                @endforeach
            </ul> 
        @else
            <div class="container text-center">
                <strong>There Are No Comments Yet </strong>
            </div> 
        @endif
    </div>

    <div class="mb-3">
        <p><strong>Write Your comment</strong></p>
        <form action="{{ route('articles.comments.store', ['article' => $article->id]) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="">Comment</label>
                <textarea name="content" id="content" cols="20" rows="5" class="form-control">
                </textarea>
            </div>
            <div>
                <button class="btn btn-success">Comment</button>
            </div>
        </form>
    </div>

@endsection