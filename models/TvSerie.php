<?php

require_once 'Production.php';
require_once './Traits/Description.php';

class TvSerie extends Production {
  
  
  public $aired_from_year;
  public $aired_to_year;
  public $number_of_episodes;
  public $number_of_seasons;
  public $running_time;
  
  use Description;
  
  public function __construct(string $_name, string $_genre, $_vote, Media $_image=null, $_aired_from_year, $_aired_to_year, $_number_of_episodes, $_number_of_seasons, $_running_time, $description = null) {
    parent::__construct($_name, $_genre, $_vote, $_image);
    $this->image = $_image;
    $this->aired_from_year = $_aired_from_year;
    $this->aired_to_year = $_aired_to_year;
    $this->number_of_episodes = $_number_of_episodes;
    $this->number_of_seasons = $_number_of_seasons;
    $this->running_time = $_running_time;
    $this->setDescription($description);
  }
}
