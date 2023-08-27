@extends('__layout.base')

@section('title', 'Category Listing')

@section('content')
    <h3><strong>Category Listing</strong></h3>
    <a href="{{ route('categories.create') }}">Create New Category</a>

    <table class="table table-striped table-bordered"> 
        <thead>
            <th><strong>No</strong></th>
            <th><strong>Name</strong></th>
            <th><strong>Created At</strong></th>
            <th><strong>Created By</strong></th>
            <th><strong>Actions</strong></th>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at->diffForHumans() }}</td>
                    <td>
                        @if ($category->user)
                           {{ $category->user->name }}   
                        @else
                            --empty--
                        @endif
                    </td>
                    <td>
                        <a href="">View</a>
                        <a href="">Edit</a>
                        <a href="">Delete</a> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection