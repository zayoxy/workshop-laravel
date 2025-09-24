@extends('layout.app')

@section('content')
<h1>Books</h1>

<a href="{{ route('books.create') }}" class="btn btn-primary float-right mb-2">Add a book</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Pages</th>
            <th scope="col">Quantity</th>
            <th scope="col">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($books as $book) 
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->pages }}</td>
            <td>{{ $book->quantity }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('books.show', $book->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('books.edit', $book->id) }}">Edit</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
