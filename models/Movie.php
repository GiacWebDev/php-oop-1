<?php
require_once 'Production.php';
require_once './Traits/Description.php';

class Movie extends Production {
  
  public $published_year;
  public $running_time;
  
  use Description;
  
  public function __construct(string $_name, string $_genre, $_vote, Media $_image=null, $_published_year, $_running_time, $description = null) {
    parent::__construct($_name, $_genre, $_vote, $_image);
    $this->image = $_image;
    $this->published_year = $_published_year;
    $this->running_time = $_running_time;
    $this->running_time = $_running_time;
    $this->setDescription($description);
  }
}