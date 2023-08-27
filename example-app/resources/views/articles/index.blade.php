@extends('__layout.base')

@section('title', 'Article Listing')

@section('content')
    @if (count($articles))
        <table>
            <thead>
                <th>No</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                <tr>
                    <td>{{ $loop->iteration }}</td> 
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->content }}</td>
                    <td>
                        <a href="{{ route('articles.show', ['article' => $article->id]) }}">View</a>
                        <a href="{{ route('articles.edit', ['article' => $article->id]) }}">Edit</a>
                        <a href="#">
                            <form action="{{ route('articles.destroy', ['article' => $article->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </a> 
                    </td>
                </tr> 
                @endforeach
            </tbody>
        </table>
    @else

    @endif
@endsection
