@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="comic">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->series }}" />
                <h5>{{ $comic->series }}</h5>
                <p>{{ $comic->description }}</p>
                <div class="price">{{ $comic->price }}</div>
                <div class="sale_date">{{ $comic->sale_date }}</div>
                <div class="type">{{ $comic->type }}</div>
            </div>
        </div>
    </div>
</div>
@endsection