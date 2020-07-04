<?php

 

include '../config/Conexao.class.php';
include '../model/dao/AlunoDAO.class.php';
include '../model/domain/Aluno.class.php';

 

if ($_POST){
    
    if(isset($_POST['btnInserir'])){
        $aluno = new Aluno($_POST['id_curso'], $_POST['nome'], $_POST['id_empresa'],  '');
        $aDAO = new AlunoDAO();
        $resultado = $aDAO->inserir($aluno);
        if ($resultado){
            echo '<script> '
                    . 'alert("Inserido com sucesso");'
                    . 'window.location.href = "/ers/aluno.php"'
                . '</script>';
        } else {
            echo '<script> '
                    . 'alert("Erro ao inserir!");'
                    . 'window.location.href = "/ers/aluno.php"'
                . '</script>';
        }
    } else if(isset($_POST['btnAlterar'])){
        $aluno = new Aluno($_POST['id_curso'], $_POST['nome'], $_POST['id_empresa'],  $_POST['ra']);
        $aDAO = new AlunoDAO();
        $resultado = $aDAO->alterar($aluno);
        if ($resultado){
            echo '<script> '
                    . 'alert("Alterado com sucesso");'
                    . 'window.location.href = "/ers/aluno.php"'
                . '</script>';
        } else {
            echo '<script> '
                    . 'alert("Erro ao alterar!");'
                    . 'window.location.href = "/ers/aluno.php"'
                . '</script>';
        }
    } else if(isset($_POST['btnExcluir'])){
        $aluno = new Aluno('', '','',  $_POST['ra']);
        $aDAO = new AlunoDAO();
        $resultado = $aDAO->excluir($aluno);
        if ($resultado){
            echo '<script> '
                    . 'alert("Excluído com sucesso");'
                    . 'window.location.href = "/ers/aluno.php"'
                . '</script>';
        } else {
            echo '<script> '
                    . 'alert("Erro ao excluir!");'
                    . 'window.location.href = "/ers/aluno.php"'
                . '</script>';
        }
    }
    
}