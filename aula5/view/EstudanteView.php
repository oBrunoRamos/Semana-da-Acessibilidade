<?php $estudantes = $_REQUEST['estudantes'];?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista Estudantes</title>
        <link rel="stylesheet" href="/aula5/view/style.css">
    </head>
    <body>
        <div class="fundo">
            <div class="left">
                <h1>Semana da Acessibilidade</h1>
                <figcaption>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTT4PzwOSIfFepGb5lyWxQEMKQn1KmQSOGWXA&usqp=CAU" alt="imagem de teclado de computador, com tres teclas destacadas indicando acessibilidade. Figuras nas teclas: tecla com figura de cadeirantes, tecla com figura de uma pessoas surdas, tecla com figura de uma cegas">
                </figcaption>
                <button><a href="http://localhost:8081/aula5/?controller=Estudante&acao=salvar">Savar aluno</a></button>
            </div>
            <div class="right">
                <table class="tabela">
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
        </div>
    </body>
</html>