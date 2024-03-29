<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('books.index', ['books' => Book::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Form 
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Book $book)
    {
        // Remove _token from the data
        $dataWithoutToken = collect($request->all())->except('_token')->toArray();

        // Create a new Book instance 
        $book = Book::create($dataWithoutToken);

        // Now you can save the book
        $book->save();
        
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { 
        // show by id
        $book = Book::find($id);
        // dd($book->authors) 

        return view('books.show', compact('book'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Form edit
        $book = Book::find($id);
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 
        // Remove _token from the data
        $dataWithoutToken = collect($request->all())->except('_token')->toArray();

        // find by id and update the Book 
        $book = Book::find($id);
        $book->update($dataWithoutToken);

        // Now you can save the book
        $book->save();

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //  fun for delete
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('books.index');
    }
}
