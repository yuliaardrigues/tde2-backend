<?php

class Aviao{
    private $idAviao;
    private $modelo;
    private $capacidade;
    private $fabricante;

    public function getIdAviao()
    {
        return $this->idAviao;
    }
    
    public function setIdAviao($idAviao)
    {
        $this->idAviao = $idAviao;
    }

   
    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

     
    public function getCapacidade()
    {
        return $this->capacidade;
    }

     
    public function setCapacidade($capacidade)
    {
        $this->capacidade = $capacidade;
    }

    
    public function getFabricante()
    {
        return $this->fabricante;
    }

    public function setFabricante($fabricante)
    {
        $this->fabricante = $fabricante;
    }
}
$aviao = new Aviao;

$aviao->setIdAviao(uniqid());
$aviao->setModelo("xr 30");
$aviao->setCapacidade(20);
$aviao->setFabricante('fabricante');

echo $aviao->getIdAviao();
echo $aviao->getCapacidade();
echo $aviao->getModelo();
echo $aviao->getFabricante();

?>
