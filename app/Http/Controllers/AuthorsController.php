<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Http\Resources\AuthorsResource;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): object
    {
        return AuthorsResource::collection(Author::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request): object
    {
        $data = $request->validated();
        $author = Author::create([
            'name' => $data['name'],
        ]);
        return new AuthorsResource($author);
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author): object
    {
        return new AuthorsResource($author);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author): object
    {
        $data = $request->validated();
        $author->update(['name' => $data['name']]);
        return new AuthorsResource($author);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author): Response
    {
        $author->delete();
        return response(null,204);
    }
}