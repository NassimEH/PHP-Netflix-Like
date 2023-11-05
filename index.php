<?php

require 'user.php';
require 'movie.php';
require 'subPlan.php';

$firstUser = new user('Nassim', 'EL HADDAD', '2004-04-03');
$secondUser = new user('Zohra', 'HADDAD', '1982-11-01');
$thirdUser = new user('Iwan', 'HADDAD', '2020-07-07');

echo '<pre>';
print_r($firstUser);
echo '</pre>';

echo '<pre>';
print_r($secondUser);
echo '</pre>';

echo '<pre>';
print_r($thirdUser);
echo '</pre>';

$firstMovie = new movie("Fight Club", "Thriller", "1999-11-10", "Pourvu d'une situation des plus enviable, un jeune homme à bout de nerfs retrouve un équilibre relatif en compagnie de Marla, rencontrée dans un groupe d'entraide. Il fait également la connaissance de Tyler Durden, personnage enthousiaste et charismatique.");

$secondMovie = new movie("Interstellar", "Drame", "2010-11-10", "C'est l'espace");

$thirdMovie = new movie("The Amazing Spiderman", "Action", "2012-11-01", "C'est l'homme araignée en reboot");

echo '<pre>';
print_r($firstMovie);
echo '</pre>';

echo '<pre>';
print_r($secondMovie);
echo '</pre>';

echo '<pre>';
print_r($thirdMovie);
echo '</pre>';

$firstSubPlan = new subPlan("Light",1,1,4.99);
$secondSubPlan = new subPlan("Standard",3,3,9.99);
$thirdSubPlan = new subPlan("Premium",12,10,14.99);

echo '<pre>';
print_r($firstSubPlan);
echo '</pre>';

echo '<pre>';
print_r($secondSubPlan);
echo '</pre>';

echo '<pre>';
print_r($thirdSubPlan);
echo '</pre>';

if($firstUser->isSubscriptionActive()){
  echo 'Abonnement actif';
}else{
  echo 'Aucun abonnement';
}

if($firstUser->addSubscription($firstSubPlan)){
 echo "Abonnement choisi : $offer";
  return true;
}

if($firstUser->isSubscriptionActive()){
  echo 'Abonnement actif';
}else{
  echo 'Aucun abonnement';
}