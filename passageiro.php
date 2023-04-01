<?php

class Passageiro{
    private $idPassageiro;
    private $cpf;
    private $nome;
    private $dataNascimento;
    private $email;
    private $telefone;
    
    public function getIdPassageiro()
    {
        return $this->idPassageiro;
    }

    public function setIdPassageiro($idPassageiro)
    {
        $this->idPassageiro = $idPassageiro;
    }

   
    public function getCpf()
    {
        return $this->cpf;
    }


    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
}

// bin2hex(random_bytes(16))
// uniqid()