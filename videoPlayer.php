<?php

require 'settings.php';

class videoPlayer{

  private Movie $_movie;
  private string $_quality;
  
  public function __construct(Movie $_movie){
    $this->_movie = $movie;
    $this->_quality = "480";
    echo 'Chargement...<br>';
  }

  public function play():void{
    echo 'Le film se lance :' .$this->_movie->getMovieName();
  }

  public function setQuality(string $quality): void{
    if(!in_array($quality, $videoQualities)){
      die("Qualité non reconnue");
    }
    $this->_quality=$quality;
  }
}