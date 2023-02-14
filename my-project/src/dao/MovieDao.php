<?php

namespace Ciri\dao;
use Ciri\dto\MovieDto;

interface MovieDao {

    public function all();

    public function findById(int $id);

    public function save(MovieDto $movieDto): bool;

}