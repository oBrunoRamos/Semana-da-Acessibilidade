<?php $estudantes = $_REQUEST['estudantes'];?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Lista Estudantes</title>
    </head>
    <body class="d-flex justify-content-center">
        <div class="d-flex row row-12 col-4 justify-content-center">
            <h1>
                Semana da Acessibilidade
            </h1>
            <figcaption>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTT4PzwOSIfFepGb5lyWxQEMKQn1KmQSOGWXA&usqp=CAU" alt="imagem de teclado de computador, com tres teclas destacadas indicando acessibilidade. Figuras nas teclas: tecla com figura de cadeirantes, tecla com figura de uma pessoas surdas, tecla com figura de uma cegas">
            </figcaption>
            <button>
                Cadastrar aluno
            </button>
            <table class="table table-info">
                <?php foreach($estudantes as $key => $estudanteAtual){ ?>
                <tr scope="row">
                    <td scope="col">
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
    </body>
</html>