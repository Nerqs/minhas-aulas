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
        //void(sem retorno)     
        function exibirBoasVindas() {
            echo 'Bem vindo ao meu mundo!<br/>';
        }

        exibirBoasVindas();

        //return(com retorno)
        function calcularAreaTerreno($largura, $comprimento) {
            $area = $largura * $comprimento;
            return $area;
        }

        $resultado =  calcularAreaTerreno(5, 25);
        echo $resultado;

    ?>
</body>
</html>