<?php

require('aviao.php');

class Voo{
    private $idVoo;
    private $codigo;
    private $horarioPartida;
    private $horarioChegada;
    private Aviao $aviao;

    public function getIdVoo(){
        return $this->idVoo;
    }

    public function setIdVoo($idVoo){
        $this->idVoo = $idVoo;
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

    public function getAviao()
    {
        return $this->aviao;
    }


    public function setAviao($aviao)
    {
        $this->aviao = $aviao;
    }
}
