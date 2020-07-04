<?php

class Agente {
    
    private $id;
    private $nome;

    public function __construct($id, $nome) {
        $this->id = $id;
        $this->nome = $nome;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }
}