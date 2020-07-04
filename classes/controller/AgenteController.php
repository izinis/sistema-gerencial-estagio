<?php

 

include '../config/Conexao.class.php';
include '../model/dao/AgenteDAO.class.php';
include '../model/domain/Agente.class.php';


if ($_POST){
    
    if(isset($_POST['btnInserir'])){
        $agente = new Agente('', $_POST['nome']);
        $agDAO = new AgenteDAO();
        $resultado = $agDAO->inserir($agente);
        if ($resultado){
            echo '<script> '
                    . 'alert("Inserido com sucesso");'
                    . 'window.location.href = "/ers/agente.php"'
                . '</script>';
        } else {
            echo '<script> '
                    . 'alert("Erro ao inserir!");'
                    . 'window.location.href = "/ers/agente.php"'
                . '</script>';
        }
    } else if(isset($_POST['btnAlterar'])){
        $agente = new Agente($_POST['id'], $_POST['nome']);
        $agDAO = new AgenteDAO();
        $resultado = $agDAO->alterar($agente);
        if ($resultado){
            echo '<script> '
                    . 'alert("Alterado com sucesso");'
                    . 'window.location.href = "/ers/agente.php"'
                . '</script>';
        } else {
            echo '<script> '
                    . 'alert("Erro ao alterar!");'
                    . 'window.location.href = "/ers/agente.php"'
                . '</script>';
        }
    } else if(isset($_POST['btnExcluir'])){
        $agente = new Agente($_POST['id'],'');
        $agDAO = new AgenteDAO();
        $resultado = $agDAO->excluir($agente);
        if ($resultado){
            echo '<script> '
                    . 'alert("Excluído com sucesso");'
                    . 'window.location.href = "/ers/agente.php"'
                . '</script>';
        } else {
            echo '<script> '
                    . 'alert("Erro ao excluir!");'
                    . 'window.location.href = "/ers/agente.php"'
                . '</script>';
        }
    }
    
}