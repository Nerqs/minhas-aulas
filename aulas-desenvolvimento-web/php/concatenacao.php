<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php

        $nome = 'Maria';
        $cor = 'amarelo';
        $idade = 25;
        $atividade = 'andar de bike';

        //operador .

        echo 'Olá '.$nome.', vi que sua cor favorita é '.$cor.', vi também que você possui '.$idade.' anos e que gosta de '.$atividade.'.';

        //aspas duplas
        echo '<br/>';

        echo "Olá $nome, vi que sua cor favorita é $cor, vi também que você possui $idade anos e que gosta de $atividade.";
    ?>
</body>
</html>