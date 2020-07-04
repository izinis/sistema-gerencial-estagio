<?php

class CursoDAO {

    private $sql;

    public function inserir($objCurso) {
        $this->sql = "INSERT INTO curso (nome, sigla) VALUES (:nome, :sigla)";
        try{
            $conexao = new Conexao();
            $c = $conexao->getCon()->prepare($this->sql);
            $c->bindValue(":nome", $objCurso->getNome());
            $c->bindValue(":sigla", $objCurso->getSigla());
            return $c->execute();
        } catch (Exception $e){
            return "Erro ao inserir! ".$e->getMessage();
        }
    }

    public function alterar($objCurso) {
        $this->sql = "UPDATE curso set nome = :nome, sigla = :sigla WHERE id = :id ";
        try{
            $conexao = new Conexao();
            $c = $conexao->getCon()->prepare($this->sql);
            $c->bindValue(":nome", $objCurso->getNome());
            $c->bindValue(":sigla", $objCurso->getSigla());
            $c->bindValue(":id", $objCurso->getId());
            return $c->execute();
        } catch (Exception $e){
            return "Erro ao alterar! ".$e->getMessage();
        }
    }

    public function excluir($objCurso){
        $this->sql = "DELETE FROM curso WHERE id = :id ";
        try{
            $conexao = new Conexao();
            $c = $conexao->getCon()->prepare($this->sql);
            $c->bindValue(":id", $objCurso->getId());
            return $c->execute();
        } catch (Exception $e){
            return "Erro ao excluir! ".$e->getMessage();
        }
    }

    public function consultarId($id){
        $this->sql = "Select * from curso where id = ".$id;
        try{
            $conexao = new Conexao();
            $c = $conexao->getCon();
            return $c->query($this->sql)->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e){
            return "Erro ao consultar! ".$e->getMessage();
        }
    }

    public function consultar(){
        $this->sql = "Select * from curso";
        try{
            $conexao = new Conexao();
            $c = $conexao->getCon();
            return $c->query($this->sql);
        } catch (Exception $e){
            return "Erro ao consultar! ".$e->getMessage();
        }
    }



}
