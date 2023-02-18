<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {

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
    public function store(StoreAuthorRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author): JsonResponse
    {
        return response()->json([
            'data'=>[
                'id' => $author->id,
                'type' => 'Authors',
                'attributes' => [
                    'name' => $author->name,
                    'created_at' => $author->created,
                    'updated_at' => $author->updated
                ]
            ]
                ]);
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
    public function update(UpdateAuthorRequest $request, Author $author): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author): RedirectResponse
    {
        //
    }
}