<?php



include '../config/Conexao.class.php';
include '../model/dao/CursoDAO.class.php';
include '../model/domain/Curso.class.php';



if ($_POST){

    if(isset($_POST['btnInserir'])){
        $curso = new Curso('', $_POST['nome'], $_POST['sigla']);
        $cDao = new CursoDAO();
        $resultado = $cDao->inserir($curso);
        if ($resultado){
            echo '<script> '
                . 'alert("Inserido com sucesso");'
                . 'window.location.href = "/ers/curso.php"'
                . '</script>';
        } else {
            echo '<script> '
                . 'alert("Erro ao inserir!");'
                . 'window.location.href = "/ers/curso.php"'
                . '</script>';
        }
    } else if(isset($_POST['btnAlterar'])){
        $curso = new Curso($_POST['id'], $_POST['nome'], $_POST['sigla']);
        $cDao = new CursoDAO();
        $resultado = $cDao->alterar($curso);
        if ($resultado){
            echo '<script> '
                . 'alert("Alterado com sucesso");'
                . 'window.location.href = "/ers/curso.php"'
                . '</script>';
        } else {
            echo '<script> '
                . 'alert("Erro ao alterar!");'
                . 'window.location.href = "/ers/curso.php"'
                . '</script>';
        }
    } else if(isset($_POST['btnExcluir'])){
        $curso = new Curso($_POST['id'],'', '');
        $cDao = new CursoDAO();
        $resultado = $cDao->excluir($curso);
        if ($resultado){
            echo '<script> '
                . 'alert("Excluído com sucesso");'
                . 'window.location.href = "/ers/curso.php"'
                . '</script>';
        } else {
            echo '<script> '
                . 'alert("Erro ao excluir!");'
                . 'window.location.href = "/ers/curso.php"'
                . '</script>';
        }
    }

}