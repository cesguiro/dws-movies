<?php

namespace Ciri\dao\impl;
use App\Models\Director;
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

	/**
	 * @param int $id
	 * @return mixed
	 */
	public function findById(int $id) {
        $movie = Movie::findOrFail($id);
        $movieDto = new MovieDto(
            $movie->id,
            $movie->title,
            $movie->year,
            $movie->duration,
            $movie->director_id
        );
        return $movieDto;
	}

    public function save(MovieDto $movieDto): bool {
        $movie = new Movie();
        $movie->title = $movieDto->getTitle();
        $movie->year = $movieDto->getYear();
        $movie->duration = $movieDto->getDuration();
        $movie->director()->associate(Director::findOrFail($movieDto->getDirector_id()));
        return $movie->save();
    }
}