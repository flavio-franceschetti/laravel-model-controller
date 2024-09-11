{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')



@section('content')
<div class="container my-5">
    <h1>Movies</h1>
    <div class="d-flex flex-wrap gap-3">

        @foreach ($movies as $movie)
            <div class="card shadow bg-warning" style="width: 18rem;">
                <div class="card-body">
                    <h3>{{ $movie->id }}</h3>
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Titolo originale: {{ $movie->original_title }}</h6>
                    <p class="card-text mb-0">Nationality: {{ $movie->nationality }}</p>
                    <p class="card-text mb-0">Data di uscita: {{ $movie->date }}</p>
                    <p class="card-text mb-0">Voto: {{ $movie->vote }}</p>
                    
                </div>
            </div>
        @endforeach
    </div>
   

    {{-- <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Original Title</th>
            <th scope="col">Nationality</th>
            <th scope="col">Date</th>
            <th scope="col">Vote</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->id }}</td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->original_title }}</td>
                    <td>{{ $movie->nationality }}</td>
                    <td>{{ $movie->date }}</td>
                    <td>{{ $movie->vote }}</td>
                </tr>
            @endforeach
        </tbody>
      </table> --}}
</div>

@endsection


@section('titlePage')
    Movies
@endsection
