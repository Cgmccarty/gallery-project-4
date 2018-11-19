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

        @guest

            <div>
                <h1 class="text-center"><strong>Galerie Gothic</strong></h1>

                <p class="text-center">Welcome! Galerie Gothic is the new up and coming website for Gothic period art. All content is shared between users,
                    meaning that everyone can edit, add, and delete exhibits. We encourage everyone to verify whether or not the art comes from the gothic
                    period before posting. <strong>Any irrelevant content  will be removed!</strong>
                </p>
                <p class="text-center pb-4 border-bottom">Thanks for stopping by, and enjoy yourself!</p>
            </div>

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
                                <button class="btn btn-dark col-12" onclick="confirm('Are you sure you want to delete this?')" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

            @else

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
                                    <button class="btn btn-dark col-12" onclick="confirm('Are you sure you want to delete this?')" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach

            @endguest
        </div>
    </div>
</div>
@endsection
