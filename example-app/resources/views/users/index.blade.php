@extends('__layout.base')

@section('title', 'User Listing')

@section('content')
    <div class="container">
        <h4>User Listing</h4> 
        @if (count($users)) 
            <table class="table table-striped table-bordered">
                <thead>
                    <th>No</th>
                    <th>Full Name</th>
                    <th>Phone Number</th> 
                    <th>Profile Email</th> 
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->profile->phone }}</td>
                            <td>{{ $user->profile->email }}</td> 
                            <td>
                                <a href="{{ route('users.show', ['user' => $user->id]) }}">View</a>
                                <a href="">Edit</a>
                                <a href="">Delete</a>
                                <a href="{{ route('users.profile.create', ['user' => $user->id]) }}">Profile</a> 
                            </td>
                        </tr> 
                    @endforeach
                </tbody>
            </table>
        @else 
            
        @endif
       
    </div> 
@endsection