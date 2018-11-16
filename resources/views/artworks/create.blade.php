@extends('layouts.card')

@section('card-header')
    Add an Artwork
@endsection

@section('card-content')

<form class="form" action="" method="POST">
    @csrf
    <div class="form-group pb-2">
        <label class="form-control label" for="new_artwork_name"><strong>Title</strong></label>
        <input class="form-control" type="text" name="new_artwork_name" id="new_artwork_name" placeholder="Title..." required>
    </div>
    <div class="form-group pb-2">
        <label class="form-control label" for="new_year_completed"><strong>Date</strong></label>
        <input class="form-control" type="text" name="new_year_completed" id="new_year_completed" placeholder="When was this artwork published? (eg. 'ca. 1400')...">
    </div>
    <div class="form-group pb-2">
        <label class="form-control label" for="new_artist_name"><strong>Artist</strong></label>
        <input class="form-control" type="text" name="new_artist_name" id="new_artist_name" placeholder="Who is the artist...">
    </div>
    <div class="form-group pb-2">
        <label class="form-control label" for="new_medium"><strong>Medium</strong></label>
        <input class="form-control" type="text" name="new_medium" id="new_medium" placeholder="Material this artwork was made of...">
    </div>
    <div class="form-group pb-2">
        <label class="form-control label" for="new_url"><strong>Image URL</strong></label>
        <input class="form-control" type="text" name="new_url" id="new_url" placeholder="URL of the image...">
    </div>
    <div class="form-group pb-2">
        <label class="form-control label" for="new_description"><strong>Description</strong></label>
        <textarea class="form-control" name="new_description" id="new_description" placeholder="Brief description of the artwork (Max 1000 characters)"></textarea>
    </div>
    <button class="btn form-control btn-dark" type="submit">Submit Artwork</button>


</form>

@endsection
