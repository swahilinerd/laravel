@extends('layouts.base')

@section('title', 'Edit task details') 

@section('content')
    <h1>EDIT TASK DETAILS</h1>
    <form action="{{ route('tasks.update', ['id' => $task->id ]) }}" method="POST">
        @csrf 
        @method('PUT') 
        <div>
            <label for="title">Title</label>
            <input type="text" value="{{ $task->title }}" name="title" id="title">
            @error('title')
                <p>{{ $message }}</p>
            @enderror 
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="5">
                {{ $task-> description }}
            </textarea>
            @error('description')
                <p>{{ $message }}</p>
            @enderror 
        </div>
        <div>
            <label for="long_description">Description</label>
            <textarea name="long_description" id="long_description" cols="30" rows="10">
                {{ $task->long_description }} 
            </textarea>
            @error('long_description')
                <p>{{ $message }}</p>
            @enderror 
        </div>
        <div>
            <button type="submit">Submit</button> 
        </div>
    </form>
@endsection