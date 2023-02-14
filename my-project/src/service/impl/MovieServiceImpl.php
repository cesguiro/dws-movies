<?php

namespace Ciri\service\impl;
use Ciri\dao\impl\EloquentMovieDao;
use Ciri\dao\MovieDao;
use Ciri\service\MovieService;

class MovieServiceImpl implements MovieService {
    
    private MovieDao $movieDao;

    public function __construct() {
        $this->movieDao = new EloquentMovieDao();
    }

	/**
	 * @return mixed
	 */
	public function all() {
        return $this->movieDao->all();
	}
}