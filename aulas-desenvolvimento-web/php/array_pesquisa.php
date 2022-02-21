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
        
    //in_array('procurar', 'onde')-> true ou false para a existencia do que esta sendo procurado
    //array_search('procurar', 'onde')-> retorna o índice do valor pesquisado caso ele exista

    $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';

    //true = 1, false = vazio
    $existe = in_array('Maçã', $lista_frutas);

    if ($existe) {
        echo 'Sim, o valor pesquisado existe no array';
    } else {
        echo 'Não, o valor pesquisado não existe no array';
    }
    echo '<br><br>';

    //caso o array_search() não encontre a pesquisa ele retorna null
    echo array_search('Abacate', $lista_frutas);

    $lista_coisas = [
        'frutas'=>$lista_frutas,
        'pessoas'=> ['João', 'Maria']
    ];

    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';

    echo in_array('Uva', $lista_coisas['frutas'])

    ?>
</body>
</html>