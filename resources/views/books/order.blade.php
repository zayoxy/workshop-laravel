@extends('layout.app')

@section('content')
<h1>Order</h1>

@if (count($books) > 0)
<table class="table">
    <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Pages</th>
            <th scope="col">Quantity</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($books as $book) 
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->pages }}</td>
            <td>{{ $book->quantity }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $books->links() }}
@else
<div class="alert alert-info">No books to order.</div>
    
@endif

@endsection
