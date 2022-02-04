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
        
        //operadores condicionais/comparação
        // == -> igual
        // === -> identico
        // != ou <> -> diferente
        // !== - > diferente entre tipos
        // < -> menor que
        // > -> maior que
        // <= -> menor ou igual que
        // >= -> maior ou igual que

        //operadores lógicos
        //E: && ou AND -> retorna vdd se todos os resultados forem verdadeiros
        //OU: || ou OR -> retorna vdd se pelo menos um dos resultados forem verdadeiros
        //XOR: XOR -> retorna vdd se um dos resultados for falso e o outro vdd, ou vice-versa
        //!() -> inverte o resultado retornado pelo resultado

        //() estabelecer precedência

        if((22 == 22 && 3 == 3) && !(5 != 5)) {
            echo 'Verdadeira';
        }else {
            echo 'Falso';
        }
       

    ?>
</body>
</html>