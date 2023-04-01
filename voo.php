<?php

class Voo{
    public $idVoo;
    public $codigo;
    public $horarioPartida;
    public $horarioChegada;

    public function getIdVoo(){
        return $this->idVoo;
    }

    public function setIdVoo(){
        $this->idVoo = uniqid();
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function getHorarioPartida(){
        return $this->horarioPartida;
    }

    public function setHorarioPartida($horarioPartida){
        $this->horarioPartida = $horarioPartida;
    }

    public function getHorarioChegada(){
        return $this->horarioChegada;
    }

    public function setHorarioChegada($horarioChegada){
        $this->horarioChegada = $horarioChegada;
    }
}

$voo1 = new Voo;
$voo1->setIdVoo();
$voo1->setCodigo('0001');
$voo1->setHorarioPartida('18:30');
$voo1->setHorarioChegada('22:00');