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
        
        //gettype() -> retorna o tipo da variável
        $valor = true;
        //$valor2 = (float)$valor; //float ou double
        //$valor3 = (string)$valor;
        //$valor4 = (int)$valor; //int ou integer

        //$valor2 = (boolean)$valor; //bolean ou bool

        //$valor2 = (int)$valor;
        $valor2 = (string)$valor;
        $valor3 = (int)$valor2;

        echo $valor.' '.gettype($valor);
        echo '<br/>';
        echo $valor2.' '.gettype($valor2);
        echo '<br/>';
        echo $valor3.' '.gettype($valor3);

    ?>
</body>
</html>