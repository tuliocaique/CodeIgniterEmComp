<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">

    <title>EmComp</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php

        echo "<table>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                </tr>";

        //$data['resultados] é acessado na view por $resultados
        foreach ($resultados as $aluno){
            echo "<tr>
                    <td>".$aluno['id']."</td>
                    <td>".$aluno['nome']."</td>
                    <td>".$aluno['sobrenome']."</td>
                  </tr>";
        }
        echo "</table>";
    ?>
</body>
</html>