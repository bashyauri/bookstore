<?php

namespace App\Http\Controllers;

use App\Models\BookAuthor;
use App\Http\Requests\StoreBookAuthorRequest;
use App\Http\Requests\UpdateBookAuthorRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class BookAuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
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
    public function store(StoreBookAuthorRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BookAuthor $bookAuthor): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookAuthor $bookAuthor): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookAuthorRequest $request, BookAuthor $bookAuthor): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookAuthor $bookAuthor): RedirectResponse
    {
        //
    }
}
