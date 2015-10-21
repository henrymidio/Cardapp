<?php

header('Content-Type: text/html; charset=UTF-8');

require 'php/config.php';
require 'php/connection.php';
require 'php/database.php';

//Recupera parametros para buscar produtos
$db = $_GET['db_name'];
$id_categoria = $_GET['id_categoria'];
$name_categoria = $_GET['categoria'];
$sub = $_GET['sub'];

//Se estiver setado usuário veio da página de busca
$nome_produto = $_GET['produto'];

//Se estiver setado usuário veio de uma categoria que tem sub-categoria
$id_sub = $_GET['id_sub'];

//Conecta ao BD
$link = DBConnect($db);

//Verifica de onde a página está sendo chamada
if (isset($nome_produto)){

  //Procura o produto buscado
  $produtos = DBSelect('nome, thumbnail, descricao, preco', 'produto', "WHERE nome='$nome_produto'", $link);
  $name_categoria = '';

  //Fecha conexão
  DBClose($link);
} 

else if(isset($id_sub)){

  //Seleciona produtos
  $produtos = DBSelect('nome, thumbnail, descricao, preco', 'produto', "WHERE subcategoria=$id_sub", $link);
  $name_categoria = $_GET['nome_sub'];
  
  //Fecha conexão
  DBClose($link);
}

else {

//Seleciona produtos
$produtos = DBSelect('nome, thumbnail, descricao, preco', 'produto', "WHERE categoria=$id_categoria", $link);

//Fecha conexão
DBClose($link);
}

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



<div data-role="page" data-theme="a">

    
  <div data-role="header" data-theme="b" data-position="fixed">

  <a href="teste.php"  data-rel="back" class="az-nodisc ui-nodisc-icon ui-btn ui-icon-arrow-l ui-btn-icon-notext">Menu</a>
    <h1 class='uppercase'><?php echo $name_categoria; ?></h1>
    
  </div>

  <div data-role="main" class="ui-content">
    
    <?php

    if ($sub == true){

        //Conecta ao BD
        $link = DBConnect($db);

        //Busca subcategorias
        $subcategorias = DBSelect('id, nome, descricao, icone', 'subcategoria', "WHERE categoria = $id_categoria", $link);
        echo "<ul data-role='listview' data-theme='a' class='ui-content' style='margin-top: 1px;''>";
        while ($exibe = mysqli_fetch_assoc($subcategorias)) { 

        echo   "<li>
                  <a data-transition='slide' href='pag-2.php?db_name=$db&id_sub=$exibe[id]&nome_sub=$exibe[nome]'>
                    <img src='$exibe[icone]'/>
                    <h2 class='ui-li-heading'>$exibe[nome]</h2>
                    <p class='ui-li-desc'>$exibe[descricao]</p>
                  </a>
                </li>";

    }
    echo "</ul>";
    //Fecha conexão
    DBClose($link);
    } else

      while($exibe = mysqli_fetch_assoc($produtos)){
        echo 
        "<div data-role='collapsible' data-theme='a' data-iconpos='right' data-inset='false'>
          <h1><img class='thumb' src='$exibe[thumbnail]' />$exibe[nome]</h1>
          <p class='descricao'>$exibe[descricao]</p>
          <p class='valor'>PREÇO: R$ $exibe[preco]</p>
        </div>";

    }
    ?>
      
       
  </div>

  
</div>



</body>
</html>
