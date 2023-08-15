@extends('layouts.base')

@section('title', 'create new title') 

@section('content')
    <h1>CREATE NEW TASK</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf 
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
            @error('title')
                <p>{{ $message }}</p>
            @enderror 
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="5"></textarea>
            @error('description')
                <p>{{ $message }}</p>
            @enderror 
        </div>
        <div>
            <label for="long_description">Description</label>
            <textarea name="long_description" id="long_description" cols="30" rows="10"></textarea>
            @error('long_description')
                <p>{{ $message }}</p>
            @enderror 
        </div>
        <div>
            <button type="submit">Submit</button> 
        </div>
    </form>
@endsection