<?php

class Production {
  public $name;
  public $genre;
  public $vote;
  public $image;
  
  
  public function __construct(string $_name, string $_genre, $_vote, Media $_image=null) {
    $this->name = $_name;
    $this->genre = $_genre;
    $this->vote = $_vote;
    
    if(empty($_name)){
      throw new Exception("Occorre un titolo");
    }else{
      $this->name = $_name;
    }
  }

  public function getVote() {
    return $this->vote;
  }

  public function setImage(Media $_image){ 
    $this->image = $_image;
  }
}