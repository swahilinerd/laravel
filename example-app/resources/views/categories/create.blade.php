@extends('__layout.base')

@section('title', 'Create New Category') 

@section('content')
<h6><strong>Create New Category</strong></h6>
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
   @include('categories.partials.form') 
   <div class="mb-3">
        <button type="submit" class="btn btn-success">Create Category</button>  
   </div>
</form>

@endsection