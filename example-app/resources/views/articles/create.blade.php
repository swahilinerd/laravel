@extends('__layout.base')

@section('title', 'Create New Article') 


@section('content')
    

   <h6>Creating New Article</h6> 
   <form action="{{ route('articles.store') }}" method="POST">
    @csrf
    @include('articles.partials.form') 
    <div>
        <button type="submit">Create Article</button> 
    </div>
   </form>
@endsection