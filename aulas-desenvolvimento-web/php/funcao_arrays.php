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
    //is_array() verifica se é um array
    /*    
    $array = [];
    $retorno = is_array($array);

    if($retorno){
        echo 'Sim, é um array';
    } else {
        echo 'Não, não é um array';
    }
    */
    //array_keys() retorna todas as chaves de um array
    /*
    $array = [1=>'a', 7=>'b', 18=>'c'];
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    $chaves_array = array_keys($array);

    $array = [1=>'a', 7=>'b', 18=>'c'];
    echo '<pre>';
    print_r($chaves_array);
    echo '</pre>';
    */

    //sort() ordena o conteudo do array de forma alfabetica
    /*
    $array = array('Mouse', 'Cabo HDMI', 'Gabinete', 'Fonte ATX', 'Notebook', 'Teclado');

    echo '<pre>';
    print_r($array);
    echo '</pre>';

    sort($array); //true ou false indicando se o array foi ou não ordenado

    echo '<pre>';
    print_r($array);
    echo '</pre>';
    */

    //asort() msma coisa do sort() porem preserva os indices
    /*
    $array = array('Mouse', 'Cabo HDMI', 'Gabinete', 'Fonte ATX', 'Notebook', 'Teclado');

    echo '<pre>';
    print_r($array);
    echo '</pre>';

    asort($array); //true ou false indicando se o array foi ou não ordenado

    echo '<pre>';
    print_r($array);
    echo '</pre>';
    */

    //count() conta a quantidade de elementos de um array
    /*
    $array = array('Mouse', 'Cabo HDMI', 'Gabinete', 'Fonte ATX', 'Notebook', 'Teclado');

    echo '<pre>';
    print_r($array);
    echo '</pre>';

    echo count($array);
    */

    //array_merge(2 ou +) funde um ou mais arrays
    /*
    $array1 = ['osx', 'windows'];
    $array2 = ['linux'];
    $array3 = ['solaris'];

    $novo_array = array_merge($array1, $array2, $array3);

    echo '<pre>';
    print_r($novo_array);
    echo '</pre>';
    */

    //explode() divide uma string baseado em um delimitador
    /*
    $string = '20/04/2018';
    $array = explode('/', $string);

    echo '<pre>';
    print_r($array);
    echo '</pre>';
    */

    //implode() junta elementos de um array em uma string
    $array = ['a', 'b', 'x', 'y']; //a,b,x,y
    $string_retorno = implode(',', $array);
    echo $string_retorno;

    ?>
</body>
</html>