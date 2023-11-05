<?php

require 'videoPlayer.php';

class user{
  private string $_firstName;
  private string $_lastName;
  private DateTime $_birthDate;
  private DateTime $_registrationDate;
  private bool $_isSubscribed;

  public function __construct(string $_firstName, string $_lastName, string $birthDate){
    $this->_firstName=$_firstName;
    $this->_lastName=$_lastName;
    $this->_birthDate= new DateTime($birthDate);
    $this->_registrationDate = new DateTime(date("Y-m-d H:i:s"));
    $this->_isSubscribed = false;
  }

  public function isSubscriptionActive():bool{
    return $this->_isSubscribed;
  }

  public function addSubscription(subPlan $offer){
    $this->_isSubscribed = true;
    echo 'L\'abonnement est bien ajouté !';
  }

  public function watchMovie(movie $film){
    $vp = new VideoPlayer($film);
    $vp->play();
  }
}

?>