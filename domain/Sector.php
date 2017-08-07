<?php

  class Sector
  {
    private $sectorId;
    private $sectornombre;
    private $sectorcapacidadPerson;
    private $sectorcantidadMesa;
    private $sectorestado;

    function Sector($sectorId,$sectornombre,$sectorcapacidadPerson,$sectorcantidadMesa,$sectorestado){
      $this->$sectorId=$sectorId;
      $this->$sectornombre=$sectornombre;
      $this->$sectorcapacidadPerson=$sectorcapacidadPerson;
      $this->$sectorcantidadMesa=$sectorcantidadMesa;
      $this->$sectorestado=$sectorestado;
    }

    function setSectorId($sectorId){
      $this->$sectorId=$sectorId;
    }
    function getSectorId(){
      return $this->$sectorId;
    }

    function setSectorNombre($sectornombre){
      $this->$sectornombre=$sectornombre;
    }
    function getSectorNombre(){
      return $this->$sectornombre;
    }

    function setSectorCapacidadPersona($sectorcapacidadPerson){
      $this->$sectorcapacidadPerson=$sectorcapacidadPerson;
    }
    function getSectorCapacidadPersona(){
      return $this->$sectorcapacidadPerson;
    }

    function setSectorCantidadMesa($sectorcantidadMesa){
      $this->$sectorcantidadMesa=$sectorcantidadMesa;
    }
    function getSectorCantidadMesa(){
      return $this->$sectorcantidadMesa;
    }

    function setSectorEstado($sectorestado){
      $this->$sectorestado=$sectorestado;
    }
    function getSectorEstado(){
      return $sectorestado;
    }






  }


?>
