{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')



@section('content')
    <div class="container my-5">
        <h1>Movies Details</h1>
        <h5>{{ $movie->title }}</h5>
        <h5>{{ $movie->nationality }}</h5>
        <h5>{{ $movie->vote }}</h5>
    @endsection


    @section('titlePage')
        Movies Details
    @endsection
