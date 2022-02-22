<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php      
        
        /*
        while (condição) {
            ...;
        }

        do {
            ...;
        } while (condição);
        */

        //for(variavel; condição; incremento)
        //Executa primeiro a variavel, depois a condição, então é executado o bloco do for e depois fica executando o incremento e testando a condição até que a condição seja falsa.
        //pode-se interronper o laço usando o break
        for ($x = 1; true; $x++) {
            if ($x == 20) {
                break;
                //continue;
            }
            echo "$x <br>";
        }

    ?>
</body>
</html>