<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artworks = \App\Artwork::get()->all();
        return view('/home', compact('artworks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/artworks/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'new_artwork_name' => 'required|max:100',
            'new_url' => 'required|max:250|url',
            'new_year_completed' => 'max:20',
            'new_artist_name' => 'max:50',
            'new_medium' => 'max:100',
            'new_description' => 'max:1000'
        ]);

        $art = new \App\Artwork;
        $art->artwork_name = $request->input('new_artwork_name');
        $art->year_completed = $request->input('new_year_completed');
        $art->artist_name = $request->input('new_artist_name');
        $art->medium = $request->input('new_medium');
        $art->url = $request->input('new_url');
        $art->description = $request->input('new_description');
        $art->save();

        $request->session()->flash('status', 'The artwork was added!');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $art = \App\Artwork::find($id);
        return view('artworks.edit', compact('art'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'new_artwork_name' => 'max:100',
            'new_url' => 'max:250|url',
            'new_year_completed' => 'max:20',
            'new_artist_name' => 'max:50',
            'new_medium' => 'max:100',
            'new_description' => 'max:1000'
        ]);

        $art = \App\Artwork::find($id);
        $art->artwork_name = $request->input('new_artwork_name');
        $art->year_completed = $request->input('new_year_completed');
        $art->artist_name = $request->input('new_artist_name');
        $art->medium = $request->input('new_medium');
        $art->url = $request->input('new_url');
        $art->description = $request->input('new_description');
        $art->save();

        $request->session()->flash('status', 'The artwork was updated!');
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $art = \App\Artwork::find($id);
        $art->delete();

        $request->session()->flash('status', 'The artwork was deleted!');

        return redirect()->route('home');
    }
}
