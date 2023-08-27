@extends('__layout.base')

@section('title', 'Post Listing')

@section('content')

<h1><strong>Posts Listing</strong></h1>
<a href="{{ route('posts.create') }}">Create New Post</a> 

<form method="GET" class="mt-3 mb-3">
    <p>Search & Filter Posts By:</p>
    <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="col-md-5">
            <select class="form-control" name="category_id" id="category_id">
                <option value="">-- select category --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-1">
            <button class="btn btn-primary">Search</button>
        </div>
    </div>
</form>

@if (count($posts))
    <table class="table table-striped table-bordered">
        <thead>
            <th><strong>No</strong></th>
            <th><strong>Title</strong></th>
            <th><strong>Category</strong></th>
            <th><strong>Created At</strong></th>
            <th><strong>Created By</strong></th> 
            <th><strong>Actions</strong></th> 
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        @if ($post->category)
                            {{ $post->category->name }}
                        @else
                           --empty--  
                        @endif
                    </td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                    <td>
                        @if ($post->user)
                           {{ $post->user->name }} 
                        @else
                            --empty--  
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('posts.show', ['post' => $post->id]) }}">View</a>
                        <a href="{{ route('posts.edit', ['post' => $post->id]) }}">Edit</a>
                        <a href="">Delete</a>
                    </td>
                </tr> 
            @endforeach
        </tbody>
    </table>
@else
    <div class="container text-center"> 
        <strong>There Are No Posts Yet</strong><br>
        <a href="{{ route('posts.create') }}">Create One Now</a>
    </div>  
@endif

@endsection