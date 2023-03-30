<?php

class Client{
    private $idClient;
    private $cpf;
    
    public function getIdClient()
    {
        return $this->idClient;
    }

    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

   
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
}

$cliente = new Client();
$cliente->setIdClient('44335453');
echo $cliente->getIdClient();

?>
