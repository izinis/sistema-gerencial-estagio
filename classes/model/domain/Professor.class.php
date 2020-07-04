<?php

class Professor {

    private $id;
    private $nome;
    private $id_curso;

    public function __construct($id, $nome, $id_curso) {
        $this->id_curso = $id_curso;
        $this->nome = $nome;
        $this->id = $id;
    }

    public function getId_curso() {
        return $this->id_curso;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getId() {
        return $this->id;
    }

    public function setId_curso($id_curso): void {
        $this->id_curso = $id_curso;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setId($id): void {
        $this->nome = $id;
    }
}

