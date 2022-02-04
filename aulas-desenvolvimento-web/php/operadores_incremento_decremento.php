<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h3>Pós-Incremento</h3>
    <?php      
        $a = 7;

        echo "O valor contido em a é $a <br/>";
        echo 'O valor contido em a após o incremento é '.$a++.'<br/>';
        echo "O valor atualizado é $a";
    ?>
    <h3>Pré-Incremento</h3>
    <?php      
        $a = 7;

        echo "O valor contido em a é $a <br/>";
        echo 'O valor contido em a pré o incremento é '.++$a.'<br/>';
        echo "O valor atualizado é $a";
    ?>
    <h3>Pós-Decremento</h3>
    <?php      
        $a = 7;

        echo "O valor contido em a é $a <br/>";
        echo 'O valor contido em a após o decremento é '.$a--.'<br/>';
        echo "O valor atualizado é $a";
    ?>
    <h3>Pré-Decremento</h3>
    <?php      
        $a = 7;

        echo "O valor contido em a é $a <br/>";
        echo 'O valor contido em a pré o decremento é '.--$a.'<br/>';
        echo "O valor atualizado é $a";
    ?>
</body>
</html>