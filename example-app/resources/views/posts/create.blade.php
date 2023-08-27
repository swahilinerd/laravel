@extends('__layout.base')

@section('title', 'Create New Post')

@section('content')
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
   @include('posts.partials.form')
   <div class="mb-3">
        <button type="submit" class="btn btn-success">Create Post</button>  
   </div>
</form>

@endsection