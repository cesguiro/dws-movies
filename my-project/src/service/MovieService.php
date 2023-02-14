<?php

namespace Ciri\service;
use Ciri\dto\MovieDto;

interface MovieService {

    public function all();

    public function findById(int $id);

    public function save(MovieDto $movieDto): bool;

}