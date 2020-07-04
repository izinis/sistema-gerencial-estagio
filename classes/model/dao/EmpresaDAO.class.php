<?php

class EmpresaDAO {

    private $sql;

    public function inserir($objEmpresa) {
        $this->sql = "INSERT INTO empresa (nome, cnpj) VALUES (:nome, :cnpj)";
        try{
            $conexao = new Conexao();
            $e = $conexao->getCon()->prepare($this->sql);
            $e->bindValue(":nome", $objEmpresa->getNome());
            $e->bindValue(":cnpj", $objEmpresa->getCnpj());
            return $e->execute();
        } catch (Exception $e){
            return "Erro ao inserir! ".$e->getMessage();
        }
    }

    public function alterar($objEmpresa) {
        $this->sql = "UPDATE empresa set nome = :nome, cnpj = :cnpj WHERE id = :id ";
        try{
            $conexao = new Conexao();
            $e = $conexao->getCon()->prepare($this->sql);
            $e->bindValue(":nome", $objEmpresa->getNome());
            $e->bindValue(":cnpj", $objEmpresa->getCnpj());
            $e->bindValue(":id", $objEmpresa->getId());
            return $e->execute();
        } catch (Exception $e){
            return "Erro ao alterar! ".$e->getMessage();
        }
    }

    public function excluir($objEmpresa){
        $this->sql = "DELETE FROM empresa WHERE id = :id ";
        try{
            $conexao = new Conexao();
            $e = $conexao->getCon()->prepare($this->sql);
            $e->bindValue(":id", $objEmpresa->getId());
            return $e->execute();
        } catch (Exception $e){
            return "Erro ao excluir! ".$e->getMessage();
        }
    }

    public function consultarId($id){
        $this->sql = "Select * from empresa where id = ".$id;
        try{
            $conexao = new Conexao();
            $e = $conexao->getCon();
            return $e->query($this->sql)->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e){
            return "Erro ao consultar! ".$e->getMessage();
        }
    }

    public function consultar(){
        $this->sql = "Select * from empresa";
        try{
            $conexao = new Conexao();
            $e = $conexao->getCon();
            return $e->query($this->sql);
        } catch (Exception $e){
            return "Erro ao consultar! ".$e->getMessage();
        }
    }



}
