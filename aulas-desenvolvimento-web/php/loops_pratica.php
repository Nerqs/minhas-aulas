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
        
        $registros = [
            ['titulo'=>'Titulo notícia 1', 'conteudo'=>'Conteúdo notícia 1'],
            ['titulo'=>'Titulo notícia 2', 'conteudo'=>'Conteúdo notícia 2'],
            ['titulo'=>'Titulo notícia 3', 'conteudo'=>'Conteúdo notícia 3'],
            ['titulo'=>'Titulo notícia 4', 'conteudo'=>'Conteúdo notícia 4']
        ];

        //use o count() para controlar de forma dinamica a exibição dos array
        $idx = 0;
        /*
        while($idx < count($registros)) {

            echo '<h3>'.$registros[$idx]['titulo'].'</h3>';
            echo '<p>'.$registros[$idx]['conteudo'].'</p>';

            $idx++;
        }
        */

        /*
        do {
            echo '<h3>'.$registros[$idx]['titulo'].'</h3>';
            echo '<p>'.$registros[$idx]['conteudo'].'</p>';

            $idx++;
        }while($idx < count($registros))
        */

        for($idx; $idx < count($registros); $idx++) {
            echo '<h3>'.$registros[$idx]['titulo'].'</h3>';
            echo '<p>'.$registros[$idx]['conteudo'].'</p>';
        }

    ?>
</body>
</html>