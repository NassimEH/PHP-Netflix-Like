<?php

class movie{
  private string $_movieName;
  private string $_movieType;
  private DateTime $_releaseDate;
  private string $_synopsis;

  function __construct(string $_movieName, string $_movieType, string $_releaseDate, string $_synopsis){
    $this->_movieName=$_movieName;
    $this->_movieType=$_movieType;
    $this->_releaseDate= new DateTime($_releaseDate);
    $this->_synopsis=$_synopsis;
  }
  function getMovieName():string{
    return $this->_movieName;
  }
}
