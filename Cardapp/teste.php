<?php

header('Content-Type: text/html; charset=UTF-8');

require 'php/config.php';
require 'php/connection.php';
require 'php/database.php';

//Recupera nome do estbelecimento(BD)
$db_name = $_GET['local'];

//Inicia conexão com BD
$link = DBConnect($db_name);


$categorias = DBSelect('id, nome, icone', 'categoria', null, $link);
$config = DBSelect('cor, empresa, logo, fundo, slogan, endereco, telefone', 'config', null, $link);

$config = mysqli_fetch_assoc($config);

DBClose($link);
?>


<!DOCTYPE html>
<html>
<head>
  <!-- Include meta tag to ensure proper rendering and touch zooming -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Inclui Estilo CSS -->
  <link rel="stylesheet" href="estilo.css">
  <!-- Include jQuery Mobile stylesheets -->
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <!-- Include the jQuery library -->
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <!-- Include the jQuery Mobile library -->
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

  <!-- Estilos Config -->
  <style type="text/css">
    .ui-page .ui-header {
    background: <?php echo "$config[cor]" ?> !important;
  }
    .conteudo {
      background-image: url(<?php echo "'$config[fundo]'" ?>);
    }

    p.valor {
  
  color: <?php echo "$config[cor]" ?>;
}
  </style>

  
</head>
<body>



<div data-role="page" data-theme="b">

  <div data-role="panel" id="myPanel" data-theme="a"> 
    <div class="logo-profile">
      <img src=<?php echo "'$config[logo]'" ?> class="logotipo"/>
        <div class="info-profile">
            <span><i>"<?php echo $config['slogan'] ?>"</span></i><br/><br/>
            <span><?php echo $config['endereco'] ?></span>
            <h5><img class="icone" src="http://icons.iconarchive.com/icons/icons8/windows-8/512/Mobile-Phone-icon.png"/><?php echo $config['telefone'] ?></h5>

        </div> 
        
      
    </div>

    <div>
      <ul data-role="listview"style="margin-top: 10px;">
        
        <?php

        while($exibe = mysqli_fetch_assoc($categorias)){

          echo "<li><a data-transition='flip' href='pag-2.php?db_name=$db_name&id_categoria=$exibe[id]&categoria=$exibe[nome]'><img class='ui-li-icon' src='$exibe[icone]' />$exibe[nome]</a></li>";
    
            }
        ?>
      
      </ul>
      
    </div>

  </div>
  
  <div data-role="header" data-position="fixed">

  <a href="#myPanel" class="az-nodisc ui-btn ui-icon-bullets ui-nodisc-icon ui-btn-icon-notext">Menu</a>
    <h1 class="uppercase"><?php echo $config['empresa'] ?></h1>
    <?php
    echo "<a href='search.php?local=$db_name' data-transition='slide' class='az-nodisc ui-btn ui-icon-search ui-btn-icon-right ui-nodisc-icon ui-btn-icon-notext'>Search</a>";
    ?>
  </div>

       <div data-role="main" class="ui-content conteudo">
        
    
  </div>

  
</div>


</body>
</html>

