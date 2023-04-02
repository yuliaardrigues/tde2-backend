<?php

require('compra.php');

Class Reserva {
    private $idReserva;
    private $codigoAssento;
    private Compra $compra;


    public function getIdReserva()
    {
        return $this->idReserva;
    }

    
    public function getCodigoAssento()
    {
        return $this->codigoAssento;
    }

    public function setIdReserva($idReserva)
    {
        $this->idReserva = $idReserva;
    }

  
    public function setCodigoAssento($codigoAssento)
    {
        $this->codigoAssento = $codigoAssento;
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
