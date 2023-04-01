<?php

require('compra.php');


class Reserva{
    private $idReserva;
    private $codigoAssento;
    private Compra $compra;

    
    public function getIdReserva()
    {
        return $this->idReserva;
    }

    public function setIdReserva($idReserva)
    {
        $this->idReserva = $idReserva;
    }

    
    public function getCodigoAssento()
    {
        return $this->codigoAssento;
    }

    
    public function setCodigoAssento($codigoAssento)
    {
        $this->codigoAssento = $codigoAssento;
    }
    
    public function getVoo()
    {
      return $this->voo;
    }
  
    public function setVoo($voo)
    {
      $this->voo = $voo;
    }
 
    public function getCompra()
    {
        return $this->compra;
    }


    public function setCompra($compra)
    {
        $this->compra = $compra;
    }
}

?>
