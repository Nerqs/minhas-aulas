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

        //
        $usuario_cartao_loja = true;
        $valor_compra = 500;

        $valor_frete = 50;
        $recebeu_desconto_frete = true;

        //operadores ternarios(evitar usar o encadeado)

        $valor_frete_aux = $usuario_cartao_loja && $valor_compra >= 400 ? 0 : ($usuario_cartao_loja && $valor_compra >= 300 ? 10 : ($usuario_cartao_loja && $valor_compra >= 100 ? 25 : $valor_frete));

        $recebeu_desconto_frete = $valor_frete != $valor_frete_aux ? true : false;

        $valor_frete = $valor_frete_aux;
        /*
        if($usuario_cartao_loja && $valor_compra >= 400) { //se a var for um valor boleano ela ja vale para a condição.
            $valor_frete = 0;
        } else if($usuario_cartao_loja && $valor_compra >= 300) {
            $valor_frete = 10;
        } else if($usuario_cartao_loja && $valor_compra >= 100) {
            $valor_frete = 25;
        } else{
            $recebeu_desconto_frete = false;
        }
        */
    ?>

    <h1>Detalhes do pedido</h1>

    <p>Possui cartão da loja? <?= $usuario_cartao_loja ? 'SIM' : 'NÃO'; ?>
        <?php
            // <condição> ? true : false

            /*if($usuario_cartao_loja) {
                echo 'SIM';
            } else {
                echo 'NÃO';
            }
            */
        ?>
    </p>

    <p>Valor da Compra: <?= $valor_compra ?></p>

    <p>Recebeu descontro no frete? <?= $recebeu_desconto_frete ? 'SIM' : 'NÃO'; ?>
        <?php
            /*
            if($recebeu_desconto_frete) {
                echo 'SIM';
            }else {
                echo 'NÃO';
            }
            */
        ?>
    </p>

    <p>Valor do frete <?= $valor_frete ?></p>
</body>
</html>