<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

use App\Http\Resources\BooksResource;

use Illuminate\Http\Response;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): object
    {
        return BooksResource::collection(Book::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request): Object
    {
        $data = $request->validated();
        $book = Book::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'publication_year' => $data['publication_year'],

        ]);
        return new BooksResource($book);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book): Object
    {
        return new BooksResource($book);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book): Object
    {
        $data = $request->validated();
        $book->update([
            'name' => $data['name'],
            'description' => $data['description'],
            'publication_year' => $data['publication_year'],
        ]);
        return new BooksResource($book);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book): Response
    {
        $book->delete();
        return response(null,204);
    }
}