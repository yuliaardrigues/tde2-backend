<?php

class Compra
{
  private $idCliente;
  private $horario;

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
}

$horario = "19:20";
$uuid = uniqid();

$compra = new Compra();
$compra->setIdCliente($uuid);
$compra->setHorario($horario);

echo "Número de identificação da compra: " . $compra->getIdCliente() . "\n";
echo "Horário  do voo: " . $compra->getHorario();
