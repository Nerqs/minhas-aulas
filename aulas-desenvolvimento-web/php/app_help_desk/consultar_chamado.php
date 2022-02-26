<?php require_once 'validador_acesso.php'; ?>

<?php

  //chamados
  $chamados = [];

  //abrir o arquivo.txt
  $arquivo = fopen('../../app_help_desk/arquivo.txt', 'r');

  //enquento houver registros (linhas) a serem recuperados
  //feof('arquivo') percorre o arquivo até o seu final
  //feof() retorna false caso não seja o final do arquivo
  while(!feof($arquivo)) {
    //linhas
    //fgets('arquivo', 'tamanho em bits/final da linha se vazio') recupera o que esta na linha selecionada
    $registro = fgets($arquivo);
    $chamados[] = $registro;
  }

  fclose($arquivo);
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <?php include_once 'nav_bar.php'; ?>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

            <?php foreach ($chamados as $chamado) { ?>

              <?php
                $chamado_dados = explode('#', $chamado);

                //autenticar o tipo de usuario
                if($_SESSION['perfil_id'] == 2){
                  //só exibir o chamado se foi criado pelo usuario
                  if($chamado_dados[0] != $_SESSION['id']){
                    continue;
                  }
                }

                if(count($chamado_dados) < 3){
                  continue;
                }
              ?>
              
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?=$chamado_dados[1];?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?=$chamado_dados[2];?></h6>
                  <p class="card-text"><?=$chamado_dados[3];?></p>

                </div>
              </div>

            <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>