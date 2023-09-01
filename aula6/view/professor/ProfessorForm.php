<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Cadastro de Professor</title>
</head>
<body>
  <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"> PHP</a>
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
  <main>
    <form class="m-4" method="POST" action="/aula6/?controller=Professor&acao=salvar">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name='nome' aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="idade" class="form-label">Idade</label>
        <input type="number" class="form-control" id="idade" name="idade">
      </div>
      <button type="submit" class="btn btn-success">Salvar</button>
    </form>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>