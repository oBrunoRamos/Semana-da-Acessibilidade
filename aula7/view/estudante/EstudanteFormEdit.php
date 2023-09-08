<?php 
  $estudante = $_REQUEST['estudante'];
  // var_dump($estudante);
  // die;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Cadastro de estudante</title>
</head>
<body>
  <header>
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/'.FOLDER.'/view'.'/navbar.php'?>
  </header>
  <main>
    <form class="m-4" method="POST" action="/<?php echo FOLDER;?>/?controller=Estudante&acao=editar&id=<?php echo $estudante["id"];?>">
      
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name='nome' aria-describedby="emailHelp" value="<?php echo $estudante["nome"];?>">
      </div>
      <div class="mb-3">
        <label for="idade" class="form-label">Idade</label>
        <input type="number" class="form-control" id="idade" name="idade" value="<?php echo $estudante["idade"];?>">
      </div>
      <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>