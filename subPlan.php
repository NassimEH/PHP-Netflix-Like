<?php

class subPlan{
  private string $_subName;
  private int $_subDuration;
  private int $_qteDevices;
  private float $_priceTTC;

  function __construct(string $_subName, int $_subDuration, int $_qteDevices, float $_priceTTC){
    $this->_subName = $_subName;
    $this->_subDuration = $_subDuration;
    $this->_qteDevices = $_qteDevices;
    $this->_priceTTC = $_priceTTC;
  }
  function changeDuration(int $nouvelleDuree):void{
    if($nouvelleDuree > 12){
      die("Durée selectionnée trop longue ! ");
    }
    $this->$_subDuration = $nouvelleDuree;
  }
}