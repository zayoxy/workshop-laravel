<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

// php artisan --resource make:controller BookController
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pagination = 5;

        // Pagination, must display links in view!
        return view('books/index', ['books' => Book::paginate($pagination)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // https://laravel.com/docs/12.x/validation#quick-writing-the-validation-logic
        $validated = $request->validate([
            'title' => 'required|min:5|max:25',
            'pages' => 'required|integer|min:1|max:1000',
            'quantity' => 'required|integer|min:0|max:100'
        ]);

        $book = new Book($validated);
        $book->save();

        return redirect()->route('books.index')->with('message', 'Book successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books/show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books/edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $book->title = $request->title;
        $book->pages = $request->pages;
        $book->quantity = $request->quantity;

        $book->save();

        return redirect()->route('books.index')->with('message', 'Book successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('message', 'Book "' . $book->title . '" successfully deleted');
    }
}
