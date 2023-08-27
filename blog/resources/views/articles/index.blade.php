@extends('layouts.base')

@section('title', 'Article Listing') 
 
@section('content')

<h4><strong>Article Listing</strong></h4>
<a href="{{ route('articles.create') }}">Create New Article</a>

<table class="mt-3 table table-striped table-bordered">
    <thead>
        <th><strong>No</strong></th>
        <th><strong>Title</strong></th>
        <th><strong>Category</strong></th>
        <th><strong>Created By</strong></th>
        <th><strong>Actions</strong></th>
    </thead>
    <tbody>
        @if ($articles)
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $loop->iteration }}</td>    
                    <td>{{ $article->name }}</td>
                    <td>{{ $article->category->name }}</td>
                    <td>{{ $article->user->name }}</td>
                    <td>
                        <a href="{{ route('articles.show', ['article' => $article->id]) }}">View</a>
                        <a href="{{ route('articles.show', ['article' => $article->id]) }}">Edit</a>
                        <a href="">Delete</a> 
                    </td>
                </tr> 
            @endforeach
        @else
            
        @endif
    </tbody>
</table>
   


@endsection