@extends('layouts.app')

@section('content')

<section class="comicsList">
    <div class="container">
        <h2>Current Series</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6">
            @foreach($comics as $comic)
            <div class="col">
                <a href="{{route('comics.show', $comic->id)}}">
                    <div class="comic">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->series }}" />
                        <h5>{{ $comic->series }}</h5>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection