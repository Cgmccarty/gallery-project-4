@extends('layouts.card')

@section('card-header')
Edit an Artwork
@endsection

@section('card-content')

<form id="addForm" class="form" action="/artworks/{{ $art->id }}" method="post">
    @method('PUT')
    @csrf
    <div class="form-group pb-2">
        <label class="form-control label" for="new_artwork_name"><strong>Title</strong></label>
        <input class="form-control" type="text" name="new_artwork_name" id="new_artwork_name" placeholder="Title..." value="{{ $art->artwork_name }}">
    </div>
    <div class="form-group pb-2">
        <label class="form-control label" for="new_year_completed"><strong>Date</strong></label>
        <input class="form-control" type="text" name="new_year_completed" id="new_year_completed" placeholder="When was this artwork published? (eg. 'ca. 1400')..." value="{{ $art->year_completed }}">
    </div>
    <div class="form-group pb-2">
        <label class="form-control label" for="new_artist_name"><strong>Artist</strong></label>
        <input class="form-control" type="text" name="new_artist_name" id="new_artist_name" placeholder="Who is the artist..." value="{{ $art->artist_name }}">
    </div>
    <div class="form-group pb-2">
        <label class="form-control label" for="new_medium"><strong>Medium</strong></label>
        <input class="form-control" type="text" name="new_medium" id="new_medium" placeholder="Material this artwork was made of..." value="{{ $art->medium }}">
    </div>
    <div class="form-group pb-2">
        <label class="form-control label" for="new_url"><strong>Image URL</strong></label>
        <input class="form-control" type="text" name="new_url" id="new_url" placeholder="URL of the image..." value="{{ $art->url }}">
    </div>
    <div class="form-group pb-2">
        <label class="form-control label" for="new_description"><strong>Description</strong></label>
        <textarea class="form-control" name="new_description" id="new_description" placeholder="Brief description of the artwork (Max 1000 characters)"></textarea>
    </div>
    <a href="/home" class="btn col-6 form-control btn-dark float-left">Cancel</a>
    <button class="btn col-6 form-control btn-dark float-right" type="submit">Submit Artwork</button>

</form>

@endsection
