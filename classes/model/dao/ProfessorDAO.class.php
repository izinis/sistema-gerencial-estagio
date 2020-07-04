<?php

class ProfessorDAO {

    private $sql;

    public function inserir($objProfessor) {
        $this->sql = "INSERT INTO professor (nome, id_curso) VALUES (:nome, :id_curso)";
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon()->prepare($this->sql);
            $p->bindValue(":nome", $objProfessor->getNome());
            $p->bindValue(":id_curso", $objProfessor->getId_curso());
            return $p->execute();
        } catch (Exception $e){
            return "Erro ao inserir! ".$e->getMessage();
        }
    }

    public function alterar($objProfessor) {
        $this->sql = "UPDATE professor set nome = :nome, id_curso = :id_curso WHERE id = :id ";
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon()->prepare($this->sql);
            $p->bindValue(":nome", $objProfessor->getNome());
            $p->bindValue(":id_curso", $objProfessor->getId_curso());
            $p->bindValue(":id", $objProfessor->getId());
            return $p->execute();
        } catch (Exception $e){
            return "Erro ao alterar! ".$e->getMessage();
        }
    }

    public function excluir($objProfessor){
        $this->sql = "DELETE FROM professor WHERE id = :id ";
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon()->prepare($this->sql);
            $p->bindValue(":id", $objProfessor->getId());
            return $p->execute();
        } catch (Exception $e){
            return "Erro ao excluir! ".$e->getMessage();
        }
    }

    public function consultarId($id){
        $this->sql = "Select * from professor where id = ".$id;
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon();
            return $p->query($this->sql)->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e){
            return "Erro ao consultar! ".$e->getMessage();
        }
    }

    public function consultar(){
        $this->sql = "Select * from professor";
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon();
            return $p->query($this->sql);
        } catch (Exception $e){
            return "Erro ao consultar! ".$e->getMessage();
        }
    }



}
