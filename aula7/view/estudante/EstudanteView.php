<?php $estudantes = $_REQUEST['estudantes'];?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista Estudantes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <?php require_once $_SERVER['DOCUMENT_ROOT'].'/'.FOLDER.'/view'.'/navbar.php'?>
        </header>
        <div class="container-fluid row justify-content-center align-itens-center  bg-primary p-5 ">
            <div class="col col-3 bg-secondary d-flex flex-column justify-content-center border border-info align-middle rounded-2">
                <h1 class="row mx-auto text-light">Semana da Acessibilidade</h1>
                <img class="img-fluid rounded-2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTT4PzwOSIfFepGb5lyWxQEMKQn1KmQSOGWXA&usqp=CAU" alt="imagem de teclado de computador, com tres teclas destacadas indicando acessibilidade. Figuras nas teclas: tecla com figura de cadeirantes, tecla com figura de uma pessoas surdas, tecla com figura de uma cegas">
                <a class="m-3 row btn btn-primary text-light" href="http://localhost:8081/<?php echo FOLDER;?>/?controller=Estudante&acao=salvar">Savar aluno</a>
            </div>
            <div class="col col-9 bg-black p-3 rounded text-light">
                <table class="table rounded table-dark table-striped">
                    <?php foreach($estudantes as $key => $estudanteAtual){ ?>
                    <tr scope="row">
                        <td scope="col">
                            <a  href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=excluir&id=<?php echo $estudanteAtual['id'];?>" class="btn btn-danger"> Excluir</a> 
                            <a  href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=editar&id=<?php echo $estudanteAtual['id'];?>" class="btn btn-warning me-5"> Editar</a>
                        
                            Nome:
                        </td>
                        <td scope="col">
                            <?php echo $estudanteAtual['nome']; ?>
                        </td>
                        <td scope="col">
                            Idade:
                        </td>
                        <td scope="col">
                            <?php echo $estudanteAtual['idade']; ?>
                        </td>  
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>     
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" >
        Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">DELETAR</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Você tem certeza que deseja excluir esse estudante
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=excluir&id=<?php echo $estudanteAtual['id'];?>">Excluir</button>
                </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>