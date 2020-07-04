<?php

 

include '../config/Conexao.class.php';
include '../model/dao/EmpresaDAO.class.php';
include '../model/domain/Empresa.class.php';

 

if ($_POST){
    
    if(isset($_POST['btnInserir'])){
        $empresa = new Empresa('', $_POST['nome'], $_POST['cnpj']);
        $eDAO = new EmpresaDAO();
        $resultado = $eDAO->inserir($empresa);
        if ($resultado){
            echo '<script> '
                    . 'alert("Inserido com sucesso");'
                    . 'window.location.href = "/ers/empresa.php"'
                . '</script>';
        } else {
            echo '<script> '
                    . 'alert("Erro ao inserir!");'
                    . 'window.location.href = "/ers/empresa.php"'
                . '</script>';
        }
    } else if(isset($_POST['btnAlterar'])){
        $empresa = new Empresa($_POST['id'], $_POST['nome'], $_POST['cnpj']);
        $eDAO = new EmpresaDAO();
        $resultado = $eDAO->alterar($empresa);
        if ($resultado){
            echo '<script> '
                    . 'alert("Alterado com sucesso");'
                    . 'window.location.href = "/ers/empresa.php"'
                . '</script>';
        } else {
            echo '<script> '
                    . 'alert("Erro ao alterar!");'
                    . 'window.location.href = "/ers/empresa.php"'
                . '</script>';
        }
    } else if(isset($_POST['btnExcluir'])){
        $empresa = new Empresa($_POST['id'],'', '', '');
        $eDAO = new EmpresaDAO();
        $resultado = $eDAO->excluir($empresa);
        if ($resultado){
            echo '<script> '
                    . 'alert("Excluído com sucesso");'
                    . 'window.location.href = "/ers/empresa.php"'
                . '</script>';
        } else {
            echo '<script> '
                    . 'alert("Erro ao excluir!");'
                    . 'window.location.href = "/ers/empresa.php"'
                . '</script>';
        }
    }
    
}