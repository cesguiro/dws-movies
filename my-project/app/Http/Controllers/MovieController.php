<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Director;
use App\Models\Movie;
use Ciri\service\impl\MovieServiceImpl;
use Ciri\service\MovieService;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    private MovieService $movieService;
    
    public function __construct(){
        $this->middleware('auth:sanctum', ['except' => ['index', 'show']]);
        $this->movieService = new MovieServiceImpl();
    }

    public function index(){
        //$movies = Movie::all();
        $movies = $this->movieService->all();
        //dd($movies);
        return response()->json($movies, 200);
    }

    public function show(Movie $movie){
        return response()->json($movie, 200);
    }

    public function store(MovieRequest $movieRequest){
        $movie = new Movie();
        $movie->title = $movieRequest->title;
        $movie->year = $movieRequest->year;
        $movie->duration = $movieRequest->duration;
        $movie->director()->associate(Director::findOrFail($movieRequest->director_id));
        $movie->save();
        return response()->json($movie, 200);
    }

    public function destroy(Movie $movie){
        $movie->delete();
    }

    public function update(MovieRequest $movieRequest, Movie $movie){
        $movie->title = $movieRequest->title;
        $movie->year = $movieRequest->year;
        $movie->duration = $movieRequest->duration;
        $movie->director()->associate(Director::findOrFail($movieRequest->director_id));
        $movie->update();
        return response()->json($movie, 200);
    }

    public function getActors($id){
        return response()->json(Movie::findOrFail($id)->actors, 200);
    }  
}
