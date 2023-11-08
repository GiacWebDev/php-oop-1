<?php

$productions=[
  new Movie('Il signore degli anelli', 'Fantasy', 4.8, new Media ("ilsignoredeglianelli.jpg", "ilsignoredeglianelli"), 2001, 178),
  new TvSerie('Breaking Bad', 'Drama', 9.5, new Media ("breakingbad.jpg", "breakingbad"), 2008, 2013, 62, 5),
  new Movie('The Ring 2', 'Horror', 3.5, new Media ("thering2.jpg", "thering2"), 2005, 110),
  new TvSerie('The Office', 'Comedy', 9.5, new Media ("theoffice.jpg", "theoffice"), 2005, 2013, 201, 9),
];

var_dump($productions);

