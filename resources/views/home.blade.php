@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @foreach ($artworks as $art)
            <div class="row mt-5 pt-5 pb-5 border-bottom">
                <div class="col-4 float-left">
                    <a href="{{ $art->url }}"><img src="{{ $art->url }}" title="{{ $art->artwork_name }}"></a>
                </div>
                <div class="col-2">
                </div>
                <div class="col-6 float-right">
                    <div class="row">
                        <p class="col-4"><strong>Title:</strong></p> <p class="col-8">{{ $art->artwork_name }}</p>
                        <p class="col-4"><strong>Year:</strong></p> <p class="col-8">{{ $art->year_completed ? $art->year_completed : 'N/A' }}</p>
                        <p class="col-4"><strong>Artist:</strong></p> <p class="col-8">{{ $art->artist_name ? $art->artist_name : 'N/A' }}</p>
                        <p class="col-4"><strong>Medium:</strong></p> <p class="col-8">{{ $art->medium ? $art->medium : 'N/A' }}</p>
                        <p class="col-4"><strong>Description:</strong></p> <p class="col-8">{{ $art->description ? $art->description : 'N/A' }}</p>
                    </div>
                    <div class="row">
                        <a class="btn btn-dark col-5" href="/artworks/{{ $art->id }}/edit">Edit</a>
                        <form class="col-6" action="/artworks/{{ $art->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-dark col-12" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
