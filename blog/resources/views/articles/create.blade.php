@extends('layouts.base')

@section('title', 'Create New Article')

@section('content')

<h4><strong>Creating New Article</strong></h4>
<form action="{{ route('articles.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="">Title</label>
        <input type="text" id="name" value="{{ old('name', optional($article ?? null)->name) }}" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Category</label>
        <select name="category_id" id="category_id" class="form-control">
            <option value="">-- select category ---</option>
            @foreach ($categories as $category)
                <option value="{{ old('category_id', optional($category ?? null)->id) }}">
                    {{ $category->name }}
                </option> 
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="">Content</label>
        <textarea name="content" id="content" cols="30" rows="10" class="form-control">
            {{ old('content', optional($article ?? null )->content )}} 
        </textarea>
    </div>
    <div class="mb-3">
        <button class="btn btn-success">Create Article</button> 
    </div>
</form>

@endsection