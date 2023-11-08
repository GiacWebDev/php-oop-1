<?php
require_once 'Production.php';

class Movie extends Production {
  public $published_year;
  public $running_time;
  
  public function __construct(string $_name, string $_genre, $_vote, Media $_image=null, $_published_year, $_running_time) {
    parent::__construct($_name, $_genre, $_vote);
    $this->published_year = $_published_year;
    $this->running_time = $_running_time;
  }
}