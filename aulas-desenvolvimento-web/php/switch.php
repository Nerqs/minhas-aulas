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
        
        $parametro = false;

        switch ($parametro) {
            case 1:
                echo 'Entrou no case 1';
                break;
            case 'abc':
                echo 'Entrou no case 2';
                break;
            case false:
                echo 'Entrou no case 3';
                break;
            default:
                echo 'Entrou no default';
                break;
        }

    ?>
</body>
</html>