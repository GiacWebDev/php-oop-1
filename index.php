<?php

$movies = [
  new Movie ('Il signore degli anelli', 'fantasy', 2,8),
  new Movie ('Jurassic Park', 'Azione', 2,7),
];

class Movie {
  public $name;
  public $genre;
  public $time;

  public function __construct( string $_name, string $_genre,  $_time) {
    $this->name = $_name;
    $this->genre = $_genre;
    $this->time = $_time;
  }

  public function getTime() {
    return $this->time = $_time;
  }
  
};

var_dump($movies)

?>