{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')



@section('content')
    <div class="container my-5">
        <h1>Best Movies</h1>
        <div class="d-flex flex-wrap gap-3">

            @foreach ($movies as $movie)
                <div class="card shadow bg-warning" style="width: 18rem;">
                    <div class="card-body">
                        <h3>{{ $movie->id }}</h3>
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Titolo originale: {{ $movie->original_title }}
                        </h6>
                        <p class="card-text mb-0">Nationality: {{ $movie->nationality }}</p>
                        <p class="card-text mb-0">Data di uscita: {{ $movie->date }}</p>
                        <p class="card-text mb-0">Voto: {{ $movie->vote }}</p>
                        <a class="btn btn-primary" href="{{ route('movieDetails', ['id' => $movie->id]) }}">Details</a>

                    </div>
                </div>
            @endforeach
        @endsection


        @section('titlePage')
            Best Movies
        @endsection
