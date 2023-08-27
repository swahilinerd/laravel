@extends('layouts.base')

@section('title', 'Create New Category')

@section('content')
    <h4><strong>Create New Category</strong></h4>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        @include('categories.partial.form')
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Create Category</button>
        </div>
    </form>

@endsection