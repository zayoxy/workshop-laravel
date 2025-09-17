@extends('layout.app')

@section('content')
<h1>Books</h1>

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
            <td>--actions--</td>
        </tr>
    @endforeach
    </tbody>
</table>

<a href="#" class="btn btn-primary mb-2">Ajouter un livre</a>
@endsection
