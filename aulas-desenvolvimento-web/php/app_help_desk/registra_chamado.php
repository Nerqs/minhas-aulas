<?php
    
    session_start();

    //fopen('nome do arquivo', 'o que fazer com o arquivo')//caso o arquivo não exista ele sera criado //crie uma variavel para o arquivo//https://www.php.net/manual/en/function.fopen.php
    $arquivo = fopen('../../app_help_desk/arquivo.txt', 'a');

    //para evitar a quebra do local do conteudo, use um replace para trocar os caracteres usados casa haja algum em um local indevido
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    //PHP_EOL funciona como quebra de linha
    $texto = $_SESSION['id'].'#'.$titulo.'#'.$categoria.'#'.$descricao.PHP_EOL;
    //echo $texto;

    //fwrite('qual arquivo','o que escrever nesse arquivo')//escrever no arquivo//https://www.php.net/manual/en/function.fwrite.php
    fwrite($arquivo, $texto);

    //fclose('nome do arquivo')//fechar o arquivo//https://www.php.net/manual/en/function.fclose.php
    fclose($arquivo);

    header('Location: abrir_chamado.php')
?>