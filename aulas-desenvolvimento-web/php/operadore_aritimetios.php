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
        $num1 = 8;
        $num2 = 4;

        echo "A soma entre o $num1 e $num2 é ".($num1 + $num2);
        echo '<br/>';
        echo "A subtração entre o $num1 e $num2 é ".($num1 - $num2);
        echo '<br/>';
        echo "A multiplicação entre o $num1 e $num2 é ".($num1 * $num2);
        echo '<br/>';
        echo "A divisão entre o $num1 e $num2 é ".($num1 / $num2);
        echo '<br/>';
        echo "A resto da divisão entre o $num1 e $num2 é ".($num1 % $num2);

    ?>
</body>
</html>