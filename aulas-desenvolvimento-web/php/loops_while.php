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
        
        $num = 0;
        //operadores de comparação ou logicos
        echo 'Inicio do loop';
        echo '<br>';
        while($num < 10) {
            $num++;
            if ($num == 2 || $num == 8) {
                continue;
            }
            echo $num.'<br>';
        };
        echo 'Fim do loop';

    ?>
</body>
</html>