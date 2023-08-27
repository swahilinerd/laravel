@extends('__layout.base')

@section('title', 'Delete Article')

@section('content')
    <form action="{{ route('articles.destroy', ['article' => $article->id]) }}">
        @csrf
        @method('DELETE')
        Are You sure You want to delete? 
        <div>
            <button type="submit">Yes Delete</button>
        </div>
    </form>
    
@endsection