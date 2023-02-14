<?php

namespace Ciri\dao\impl;
use App\Models\Movie;
use Ciri\dao\MovieDao;
use Ciri\dto\MovieDto;

class EloquentMovieDao implements MovieDao {
    
	/**
	 * @return mixed
	 */
	public function all() {
        $movies = Movie::all();
        $movieDto = array();
        foreach ($movies as $movie) {
            $movieDto[] = new MovieDto(
                $movie->id,
                $movie->title,
                $movie->year,
                $movie->duration,
                $movie->director_id
            );
        }
        return $movieDto;
	}
}