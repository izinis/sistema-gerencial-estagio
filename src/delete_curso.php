<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Sistema em PHP</title>
</head>
<body>
<?php include("menu.php"); ?>
<div class="container">
    <h1>Excluir Curso</h1>
    <?php
    include("../classes/config/Conexao.class.php");
    include("../classes/model/dao/CursoDAO.class.php");
    if (isset($_GET['id'])){
        $objDAO = new CursoDAO();
        $resultado = $objDAO->consultarId($_GET['id']);

        ?>
        <form method="POST" action="../classes/controller/CursoController.php">
            <input type="hidden" name="id" value="<?= $resultado['id'] ?>" />
            <div class="row">
                <div class="col">
                    <label for="nome"> Nome do curso: </label>
                    <input type="text" disabled="disabled" name="nome" class="form-control" value="<?= $resultado['nome'] ?>"/>
                </div>
                <div class="col">
                    <label for="sigla"> Sigla do curso: </label>
                    <input type="text" disabled="disabled" name="sigla" class="form-control" value="<?= $resultado['nome'] ?>"/>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <input type="submit" name="btnExcluir" class="btn btn-primary" value="Excluir"/>
                </div>
            </div>
        </form>
        <?php
    }
    ?>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>