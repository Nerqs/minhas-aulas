<?php
    session_start();

    /*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    
    //remover indices do array de sessão
    //unset()
    unset($_SESSION['x']);//remove o indice apenas se ele existir, sem erros

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //destruir a varaivel de sessão
    //session_destroy()
    session_destroy();
    //forçar um rediricionamento, ja que só destroi de fato quando recarrega.

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    */
    session_destroy();
    header('Location: index.php');

?>