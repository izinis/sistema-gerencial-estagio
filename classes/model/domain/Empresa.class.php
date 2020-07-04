<?php

class Empresa {

    private $id;
    private $nome;
    private $cnpj;

    public function __construct($id, $nome, $cnpj) {
        $this->id = $id;
        $this->nome = $nome;
        $this->cnpj = $cnpj;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setCnpj($cnpj): void {
        $this->nome = $cnpj;
    }
}

