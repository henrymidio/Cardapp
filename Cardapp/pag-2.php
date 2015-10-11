<?php

require 'php/config.php';
require 'php/connection.php';
require 'php/database.php';

//Recupera parametros para buscar produtos
$db = $_GET['db_name'];
$id_categoria = $_GET['id_categoria'];

//Conecta ao BD
$link = DBConnect($db);

//Seleciona produtos
$produtos = DBSelect('nome, thumbnail, descricao, preco', 'produto', "WHERE categoria=$id_categoria", $link);

//Fecha conexão
DBClose($link);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
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
</head>
<body>



<div data-role="page" data-theme="b">

    
  <div data-role="header" data-position="fixed">

  <a href="teste.php"  data-rel="back" class="az-nodisc ui-nodisc-icon ui-btn ui-icon-arrow-l ui-btn-icon-notext">Menu</a>
    <h1 class='uppercase'><?php echo $_GET['categoria']; ?></h1>
    
  </div>

  <div data-role="main" class="ui-content">
    
    <?php

      while($exibe = mysqli_fetch_assoc($produtos)){
        echo 
        "<div data-role='collapsible' data-theme='a' data-iconpos='right' data-inset='false'>
          <h1><img class='thumb' src='$exibe[thumbnail]' /> $exibe[nome]</h1>
          <p class='descricao'>$exibe[descricao]</p>
          <p class='valor'>PREÇO: R$ $exibe[preco]</p>
        </div>";

    }
    ?>
      
  </div>

  
</div>



</body>
</html>
