<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Album;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::all();
        return view('album.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artists = Artist::all();
        return view('album.create', compact('artists'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $album = new Album();
        $album->title = $request->title;
        $album->genre = $request->genre;
        $album->date_released = $request->date_released;
        $album->artist_id = $request->artist_id;
        // dd($request);
        $album->save();
        return redirect('/albums');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $album = Album::find($id);
        // dd($album);
        // $artists = Artist::all();
        // $artists = Artist::where('id', '<>', $album->artist_id)->get(['id','name']);
        // // dd($artists);
        // $album_artist = Artist::where('id', $album->artist_id)->first();
        // // dd($album_artist);
        // return view('album.edit', compact('album', 'artists', 'album_artist'));

        $artists = Artist::all();

        return view('album.edit', compact('album', 'artists'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);
        $album = Album::where('id', $id)
                    ->update([
                        'title' => trim($request->title),
                        'genre' => $request->genre,
                        'date_released' => $request->date_released,
                        'artist_id' => $request->artist_id,
                    ]);
        if ($album) {
            return redirect()->route('albums.index');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}