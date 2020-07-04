<?php

class AlunoDAO {

    private $sql;

    public function inserir($objAluno) {
        $this->sql = "INSERT INTO aluno (nome, id_empresa, id_curso) VALUES (:nome, :id_empresa, :id_curso)";
        try{
            $conexao = new Conexao();
            $a = $conexao->getCon()->prepare($this->sql);
            $a->bindValue(":nome", $objAluno->getNome());
            $a->bindValue(":id_empresa", $objAluno->getId_empresa());
            $a->bindValue(":id_curso", $objAluno->getId_curso());
            return $a->execute();
        } catch (Exception $e){
            return "Erro ao inserir! ".$e->getMessage();
        }
    }

    public function alterar($objAluno) {
        $this->sql = "UPDATE aluno set nome = :nome, id_empresa = :id_empresa, id_curso = :id_curso WHERE ra = :ra ";
        try{
            $conexao = new Conexao();
            $a = $conexao->getCon()->prepare($this->sql);
            $a->bindValue(":nome", $objAluno->getNome());
            $a->bindValue(":id_empresa", $objAluno->getId_empresa());
            $a->bindValue(":id_curso", $objAluno->getId_curso());
            $a->bindValue(":ra", $objAluno->getRa());
            return $a->execute();
        } catch (Exception $e){
            return "Erro ao alterar! ".$e->getMessage();
        }
    }

    public function excluir($objAluno){
        $this->sql = "DELETE FROM aluno WHERE ra = :ra ";
        try{
            $conexao = new Conexao();
            $a = $conexao->getCon()->prepare($this->sql);
            $a->bindValue(":ra", $objAluno->getRa());
            return $a->execute();
        } catch (Exception $e){
            return "Erro ao excluir! ".$e->getMessage();
        }
    }

    public function consultarRa($ra){
        $this->sql = "Select * from aluno where ra = ".$ra;
        try{
            $conexao = new Conexao();
            $a = $conexao->getCon();
            return $a->query($this->sql)->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e){
            return "Erro ao consultar! ".$e->getMessage();
        }
    }

    public function consultar(){
        $this->sql = "Select * from aluno";
        try{
            $conexao = new Conexao();
            $a = $conexao->getCon();
            return $a->query($this->sql);
        } catch (Exception $e){
            return "Erro ao consultar! ".$e->getMessage();
        }
    }
}
