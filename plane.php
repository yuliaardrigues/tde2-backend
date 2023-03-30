<?php

class Plane{
    private $idPlane;
    private $model;
    private $capacity;
    private $manufacturer;

    public function getIdPlane()
    {
        return $this->idPlane;
    }
    
    public function setIdPlane($idPlane)
    {
        $this->idPlane = $idPlane;
    }

   
    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

     
    public function getCapacity()
    {
        return $this->capacity;
    }

     
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }
}

?>
