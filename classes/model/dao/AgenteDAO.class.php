<?php

class AgenteDAO {

    private $sql;

    public function inserir($objAgente) {
        $this->sql = "INSERT INTO agente (nome) VALUES (:nome)";
        try{
            $conexao = new Conexao();
            $ag = $conexao->getCon()->prepare($this->sql);
            $ag->bindValue(":nome", $objAgente->getNome());
            return $ag->execute();
        } catch (Exception $e){
            return "Erro ao inserir! ".$e->getMessage();
        }
    }

    public function alterar($objAgente) {
        $this->sql = "UPDATE agente set nome = :nome WHERE id = :id ";
        try{
            $conexao = new Conexao();
            $ag = $conexao->getCon()->prepare($this->sql);
            $ag->bindValue(":nome", $objAgente->getNome());
            $ag->bindValue(":id", $objAgente->getId());
            return $ag->execute();
        } catch (Exception $e){
            return "Erro ao alterar! ".$e->getMessage();
        }
    }

    public function excluir($objAgente){
        $this->sql = "DELETE FROM agente WHERE id = :id ";
        try{
            $conexao = new Conexao();
            $ag = $conexao->getCon()->prepare($this->sql);
            $ag->bindValue(":id", $objAgente->getId());
            return $ag->execute();
        } catch (Exception $e){
            return "Erro ao excluir! ".$e->getMessage();
        }
    }

    public function consultarId($id){
        $this->sql = "Select * from agente where id = ".$id;
        try{
            $conexao = new Conexao();
            $ag = $conexao->getCon();
            return $ag->query($this->sql)->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e){
            return "Erro ao consultar! ".$e->getMessage();
        }
    }

    public function consultar(){
        $this->sql = "Select * from agente";
        try{
            $conexao = new Conexao();
            $ag = $conexao->getCon();
            return $ag->query($this->sql);
        } catch (Exception $e){
            return "Erro ao consultar! ".$e->getMessage();
        }
    }



}
