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
    //a tag <pre> formata o conteudo da array para facilitar a leitura
    //sequenciais (numéricos)
    //$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacate');
    /*
    $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];
    $lista_frutas[] = 'Abacaxi';
 
    echo '<pre>';
    var_dump($lista_frutas);
    echo '</pre>';
    echo '<br>';
    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';
    
    echo $lista_frutas[4]
    */
    //associativos
    $lista_frutas = [
        'a'=>'Banana',
        'b'=>'Maçã',
        'c'=>'Morango',
        'd'=>'Uva',
        'e'=>'Abacate'
    ];
    $lista_frutas['f'] = 'Abacaxi';
    echo '<pre>';
    var_dump($lista_frutas);
    echo '</pre>';
    echo '<br>';
   
    echo $lista_frutas['f'];

    ?>
</body>
</html>