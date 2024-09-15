<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        
        $movies = Movie::all();

        return view('movies', compact('movies'));
    }
    
    public function bestMoviesFilter(){
        
        $movies = Movie::all()->where('vote', '>',  9);

        return view('bestMovies', compact('movies'));
    }

    public function show($id){

        $movie = Movie::find($id);

       return view('moviesDetails', compact('movie'));
    }
}
