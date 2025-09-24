@extends('layout.app')

@section('content')


<div class="row mb-3">
    <div class="col-12">
        <a class="btn btn-primary" href="{{ route('books.index') }}">Back</a>
    </div>
</div>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-12 col-lg-6 offset-0 offset-lg-3">
            <div class="card">
                <div class="card-header">
                Add a book
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="inputTitle">Title</label>
                            <input type="text" name="title" class="form-control" id="inputTitle" value="{{ old('title') }}">
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-6">
                                <label for="inputPages">Nb pages</label>
                                <input type="text" name="pages" class="form-control" id="inputPages" value="{{ old('pages') }}">
                            </div>
                            <div class="form-group col-6">
                                <label for="inputQuantity">Quantity</label>
                                <input type="text" name="quantity" class="form-control" id="inputQuantity" value="{{ old('quantity') }}">
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label for="inputAuthor">Author</label>
                            <select name="author_id" id="inputAuthorId">
                                <option value="">Chose an author</option> <!-- "" => null -->
                                @foreach ($authors as $author)    
                                    <option {{ old('author_id') == $author->id ? 'selected' : '' }} value="{{ $author->id }}">{{ $author->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
