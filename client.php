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
}

$cliente = new Client();
$cliente->setIdClient('44335453');
echo $p->getIdClient();

?>
