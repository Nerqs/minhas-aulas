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
        //recuperação da da data atual / data corrente
        echo date('d/m/Y H:i'); // https://www.php.net/manual/en/function.date

        // para alterar no php.ini busque por date.timezone
        echo '<br/>';
        echo date_default_timezone_get();
        date_default_timezone_set('America/Sao_Paulo'); //https://www.php.net/manual/en/timezones.php
        echo '<br/>';
        echo date('d/m/Y H:i');
        */

        $data_inicial = '2018-04-24'; //para calculos use ano/mes/dia
        $data_final = '2018-05-15';

        //timestamp
        //01/01/1970

        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);
        echo $data_inicial.' - '.$time_inicial;
        echo '<br/>';
        echo $data_final.' - '.$time_final;

        $diferenca_times = abs($time_inicial - $time_final); //abs retona o valor absoluto

        echo '<br/>';
        echo 'A diferença de segundo entre a data inicial e final é '.$diferenca_times;

        $segundos_existem_dias = 24 * 60 * 60;

        echo '<br/>';
        echo 'Um dia possui '.$segundos_existem_dias.' segundos.';

        $diferenca_de_dias_entre_as_data = $diferenca_times / $segundos_existem_dias;

        echo '<br/>';
        echo 'A diferença em dia é: '.$diferenca_de_dias_entre_as_data.' dias';
    ?>
</body>
</html>