<?php

class Curso {

    private $id;
    private $nome;
    private $sigla;

    public function __construct($id, $nome, $sigla) {
        $this->id = $id;
        $this->nome = $nome;
        $this->sigla = $sigla;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSigla() {
        return $this->sigla;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setSigla($sigla): void {
        $this->nome = $sigla;
    }
}

