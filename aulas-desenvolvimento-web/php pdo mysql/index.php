<?php

    if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {

        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $usuario = 'root';
        $senha = '';

        try {
            $conexao = new PDO($dsn, $usuario, $senha);

            //query
            $query = "select * from tb_usuarios where ";
            $query .= "email = :usuario ";
            $query .= "AND senha = :senha ";

            $stmt = $conexao->prepare($query);

            //https://www.php.net/manual/en/pdostatement.bindvalue
            $stmt->bindValue(':usuario', $_POST['usuario']);
            $stmt->bindValue(':senha', $_POST['senha']);

            $stmt->execute();

            $usuario = $stmt->fetch();

            echo '<pre>';
            print_r($usuario);
            echo '</pre>';

        } catch (PDOException $e){ //https://www.php.net/manual/en/class.pdoexception
            echo 'Erro '.$e->getCode().' mensagem: '.$e->getMessage();
            //registrar erro
        }
    }
    
?>

<html>
    <head>
        <meta charset="utf-8"> 
        <title>Login</title>
    </head>
    <body>
        <form method="POST" action="index.php">
            <input type="text" placeholder="Usuário" name="usuario">
            <br>
            <input type="password" placeholder="Senha" name="senha">
            <br>

            <button type="submit">Enviar</button>
        </form>
    </body>
</html>