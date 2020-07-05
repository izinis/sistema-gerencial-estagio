<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Sistema em PHP</title>
</head>
<body>

<nav class="navbar navbar-expand-lg  navbar-dark bg-info">
    <a class="navbar-brand" href="#">S.E.F - Gerenciador de estágio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse white" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <figure class="img">
                    <img src="../img/house.svg" class="icon-menu-header" alt="ícone aluno">
                </figure>

                <a class="nav-link" href="index.php">Início</span></a>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <figure class="img">
                        <img src="../img/view.svg" class="icon-menu-header" alt="ícone aluno">
                    </figure>
                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Visualizar
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="view/agente.php">Agentes</a>
                        <a class="dropdown-item" href="view/aluno.php">Alunos</a>
                        <a class="dropdown-item" href="view/empresa.php">Empresas</a>
                        <a class="dropdown-item" href="view/professor.php">Professores</a>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <figure class="img">
                        <img src="../img/edit.svg" class="icon-menu-header" alt="ícone aluno">
                    </figure>
                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Editar
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="edit/agente.php">Agentes</a>
                        <a class="dropdown-item" href="edit/aluno.php">Alunos</a>
                        <a class="dropdown-item" href="edit/empresa.php">Empresas</a>
                        <a class="dropdown-item" href="edit/professor.php">Professores</a>
                    </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <figure class="img">
                        <img src="../img/create.svg" class="icon-menu-header" alt="ícone aluno">
                    </figure>
                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Criar
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="create/agente.php">Agentes</a>
                        <a class="dropdown-item" href="create/aluno.php">Alunos</a>
                        <a class="dropdown-item" href="create/empresa.php">Empresas</a>
                        <a class="dropdown-item" href="create/professor.php">Professores</a>
                    </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <figure class="img">
                        <img src="../img/delete.svg" class="icon-menu-header" alt="ícone aluno">
                    </figure>
                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Apagar
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="delete/agente.php">Agentes</a>
                        <a class="dropdown-item" href="delete/aluno.php">Alunos</a>
                        <a class="dropdown-item" href="delete/empresa.php">Empresas</a>
                        <a class="dropdown-item" href="delete/professor.php">Professores</a>
                    </div>
            </li>

        </ul>
    </div>
</nav>
</body>
</html>
