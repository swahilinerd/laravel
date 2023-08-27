@extends('__layout.base')

@section('title', 'Create User Profile')

@section('content')
    <div>
        <div>Full Name: {{ $user->name }}</div>
    </div>
    <h4>Create Profile</h4>
    <form method="POST" action="{{ route('users.profile.store', ['user' => $user->id]) }}">
        @csrf
        @include('users.profile.partials.form')
        <div>
            <button class="btn btn-success">Create Profile</button> 
        </div>
    </form>
@endsection