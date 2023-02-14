<?php

namespace Ciri\dto;

class MovieDto implements \JsonSerializable{

    private ?int $id;
    private string $title;
    private int $year;
    private int $duration;
    private int $director_id;

    


    /**
     * @param  int $id
     * @param string $title
     * @param int $year
     * @param int $duration
     * @param int $director_id
     */
    public function __construct(?int $id, string $title, int $year, int $duration, int $director_id) {
        $this->id = $id;
    	$this->title = $title;
    	$this->year = $year;
    	$this->duration = $duration;
    	$this->director_id = $director_id;
    }

    public function getId(): int{
        return $this->id;
    }

	/**
	 * @return string
	 */
	public function getTitle(): string {
		return $this->title;
	}

	/**
	 * @return int
	 */
	public function getYear(): int {
		return $this->year;
	}

	/**
	 * @return int
	 */
	public function getDuration(): int {
		return $this->duration;
	}

	/**
	 * @return int
	 */
	public function getDirector_id(): int {
		return $this->director_id;
	}
	/**
	 * Specify data which should be serialized to JSON
	 * Serializes the object to a value that can be serialized natively by json_encode().
	 * @return mixed Returns data which can be serialized by json_encode(), which is a value of any type other than a resource .
	 */
	public function jsonSerialize() {
        return [
			'id' => $this->id,
			'titulo' => $this->title,
			'año' => $this->year,
			'duración' => $this->duration,
            'director_id' => $this->director_id
		];		
	}
}