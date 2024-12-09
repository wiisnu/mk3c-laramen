<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the albums.
     */
    public function index()
    {
        // Fetch all albums from the database
        $albums = Album::all();

        // Return the view with the albums data
        return view('album', compact('albums'));
    }

    /**
     * Display the specified album.
     */
    public function show(Album $album)
    {
        return response()->json([
            'album' => $album
        ]);
    }
}
