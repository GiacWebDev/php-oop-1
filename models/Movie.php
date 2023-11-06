<?php

class Movie {
  public $name;
  public $genre;
  public $vote;

  public function __construct( string $_name, string $_genre,  $_vote) {
    $this->name = $_name;
    $this->genre = $_genre;
    $this->vote = $_vote;
  }

  public function getVote() {
    return $this->vote = $_vote;
  }
};