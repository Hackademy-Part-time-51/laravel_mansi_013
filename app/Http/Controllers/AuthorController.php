<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('authors.index', ['authors' => Author::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {
        Author::create([
            'name' => $request->name,
            'surname' => $request->surname,
        ]);

        return to_route('authors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $author->update([
            'name' => $request->name,
            'surname' => $request->surname,
        ]);

        return to_route('authors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return to_route('authors.index');
    }
}
