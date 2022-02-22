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
    
        $x = 10;
        
         do {
            echo 'Entrou no while';

            //continue
            //break
         } while ($x < 9);

         echo '<br>';

         while ($x < 9) {
             echo 'Entrou no segundo while';
         }

    ?>
</body>
</html>