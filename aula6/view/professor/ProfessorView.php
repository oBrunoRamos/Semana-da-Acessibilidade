<?php $professores = $_REQUEST['professores'];?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista Professores</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
                <div class="container-fluid">
                <a class="navbar-brand" href="/<?php echo FOLDER;?>/"> PHP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/<?php echo FOLDER;?>/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/<?php echo FOLDER;?>/?controller=Estudante&acao=listarController">Alunos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/<?php echo FOLDER;?>/?controller=Professor&acao=listarController">Professores</a>
                    </li>
                    </ul>
                    <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                </div>
            </nav>
        </header>
        <div class="container-fluid row justify-content-center align-itens-center  bg-success p-5 -fluid">
            <div class="col col-3 bg-secondary d-flex flex-column justify-content-center border border-warning align-middle rounded-2">
                <h1 class="row mx-auto text-light">Semana da Acessibilidade</h1>
                <img class="img-fluid rounded-2" class="img img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTT4PzwOSIfFepGb5lyWxQEMKQn1KmQSOGWXA&usqp=CAU" alt="imagem de teclado de computador, com tres teclas destacadas indicando acessibilidade. Figuras nas teclas: tecla com figura de cadeirantes, tecla com figura de uma pessoas surdas, tecla com figura de uma cegas">
                <a class="m-3 row btn btn-success text-light" href="http://localhost:8081/aula6/?controller=Professor&acao=salvar">Savar professor</a>
            </div>
            <div class="col col-9 bg-black p-3 rounded text-light">
                <table class="table rounded table-dark table-striped">
                    <?php foreach($professores as $key => $professorAtual){ ?>
                    <tr scope="row">
                        <td scope="col">
                            Nome:
                        </td>
                        <td scope="col">
                            <?php echo $professorAtual['nome']; ?>
                        </td>
                        <td scope="col">
                            Idade:
                        </td>
                        <td scope="col">
                            <?php echo $professorAtual['idade']; ?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>