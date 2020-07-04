<?php

class Aluno {
    
    private $id_curso;
    private $nome;
    private $id_empresa;
    private $ra;
    
    public function __construct($id_curso, $nome, $id_empresa, $ra) {
        $this->id_curso = $id_curso;
        $this->nome = $nome;
        $this->id_empresa = $id_empresa;
        $this->ra = $ra;
    }
    
    public function getId_curso() {
        return $this->id_curso;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getId_empresa() {
        return $this->id_empresa;
    }

    public function getRa() {
        return $this->ra;
    }

    public function setId_curso($id_curso): void {
        $this->id_curso = $id_curso;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setId_empresa($id_empresa): void {
        $this->id_empresa = $id_empresa;
    }

    public function setRa($ra): void {
        $this->ra = $ra;
    }




}
