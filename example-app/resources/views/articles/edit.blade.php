@extends('__layout.base')

@section('title', 'Edit Article')

@section('content')
    <h4>Edit Article</h4>
    <form action="{{ route('articles.update', ['article' => $article->id])}}" method="POST">
        @csrf
        @method('PUT')  
        @include('articles.partials.form')
        <div>
            <button type="submit">Edit Article</button>
        </div>
    </form>

@endsection