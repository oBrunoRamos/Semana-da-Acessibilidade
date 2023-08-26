<?php $professores = $_REQUEST['professor'];?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Professores</title>
</head>
<body>
    <table>
        <tr>
            <?php foreach($professores as $key => $professor){ ?>
            <td>
                Nome - Cadeira: 
            </td>
            <td>
                <?php echo $professor['nome']; ?>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>