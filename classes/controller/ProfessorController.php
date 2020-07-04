<?php


include '../config/Conexao.class.php';
include '../model/dao/ProfessorDAO.class.php';
include '../model/domain/Professor.class.php';

 

if ($_POST){
    
    if(isset($_POST['btnInserir'])){
        $professor = new Professor('', $_POST['nome'], $_POST['id_curso'] );
        $pDAO = new ProfessorDAO();
        $resultado = $pDAO->inserir($professor);
        if ($resultado){
            echo '<script> '
                    . 'alert("Inserido com sucesso");'
                    . 'window.location.href = "/ers/professor.php"'
                . '</script>';
        } else {
            echo '<script> '
                    . 'alert("Erro ao inserir!");'
                    . 'window.location.href = "/ers/professor.php"'
                . '</script>';
        }
    } else if(isset($_POST['btnAlterar'])){
        $professor = new Professor($_POST['id'], $_POST['nome'], $_POST['id_curso'] );
        $pDAO = new ProfessorDAO();
        $resultado = $pDAO->alterar($professor);
        if ($resultado){
            echo '<script> '
                    . 'alert("Alterado com sucesso");'
                    . 'window.location.href = "/ers/professor.php"'
                . '</script>';
        } else {
            echo '<script> '
                    . 'alert("Erro ao alterar!");'
                    . 'window.location.href = "/ers/professor.php"'
                . '</script>';
        }
    } else if(isset($_POST['btnExcluir'])){
        $professor = new Professor($_POST['id'], '', '' );
        $pDAO = new ProfessorDAO();
        $resultado = $pDAO->excluir($professor);
        if ($resultado){
            echo '<script> '
                    . 'alert("Excluído com sucesso");'
                    . 'window.location.href = "/ers/professor.php"'
                . '</script>';
        } else {
            echo '<script> '
                    . 'alert("Erro ao excluir!");'
                    . 'window.location.href = "/ers/professor.php"'
                . '</script>';
        }
    }
    
}