<?php
    //foreach usado para percorer os dados no banco de dados
    foreach($conexao->query($query) as $key => $value) {
        print_r($value[1]);
        echo '<hr>';
    }
?>