@extends('layouts.base') 

@section('title', $task->title) 

@section('header')
<h1><strong>TASK DETAIL</strong></h1>
@endsection 

@section('content')
<div>
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    @if ($task->long_description)
    <p>{{ $task->long_description }}</p> 
    @endif 
</div>

@endsection 