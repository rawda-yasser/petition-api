<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorResource;
use App\Models\Author;
use App\Http\Resources\AuthorCollection;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new AuthorCollection(Author::all());
    }

    /**
     * Show the form for creating a new resource.
     */


    public function show(Author $author)
    {
        return new AuthorResource($author);
    }



}