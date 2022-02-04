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

        //string
        $nome = 'Jean Carlos';
        
        //int
        $idade = 28;

        //float
        $peso = 98.5;

        //bolean
        $fumante_sn = false; //(true = 1) ou (false = vazio)

        //... Lógica ...//

        $idade = '30';

    ?>

    <h1>Ficha cadastral</h1>
    <br/>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>

</body>
</html>