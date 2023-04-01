<?php

require('passageiro.php');

class Compra
{
  private $idCliente;
  private $horario;
  private Passageiro $passageiro;

  public function getIdCliente()
  {
    return $this->idCliente;
  }

  public function setIdCliente($idCliente)
  {
    $this->idCliente = $idCliente;
  }

  public function getHorario()
  {
    return $this->horario;
  }

  public function setHorario($horario)
  {
    $this->horario = $horario;

    return $this;
  }

  /**
   * Get the value of passageiro
   */ 
  public function getPassageiro()
  {
    return $this->passageiro;
  }

  /**
   * Set the value of passageiro
   *
   * @return  self
   */ 
  public function setPassageiro($passageiro)
  {
    $this->passageiro = $passageiro;

    return $this;
  }
}

?>
