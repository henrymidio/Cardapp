<?php

header('Content-Type: text/html; charset=UTF-8');

require 'php/config.php';
require 'php/connection.php';
require 'php/database.php';

//Recupera nome do estbelecimento(BD)
$db_name = $_GET['local'];

//Inicia conexão com BD
$link = DBConnect($db_name);

//Seleciona nomes dos produtos no BD
$produtos = DBSelect('nome', 'produto', null, $link);

//Fecha conexão com BD
DBClose($link);
?>

<!DOCTYPE html>
<html lang="pt-BR">
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

    
  <div data-role="header" data-position="fixed">
	
  	<form class="ui-filterable">
      <input id="autocomplete-input" data-type="search" name="search-mini" id="search-mini" value="" data-mini="true" placeholder="Buscar..." />
    </form>

    <ul data-role="listview" data-filter="true" data-filter-reveal="true" data-icon='arrow-u-l' data-input="#autocomplete-input" class='ui-nodisc-icon ui-alt-icon'>
      <?php

        while($exibe = mysqli_fetch_assoc($produtos)){
            echo "<li><a href='pag-2.php?db_name=$db_name&produto=$exibe[nome]'>$exibe[nome]</a></li>";
        }
      ?>
		  
    </ul>
  </div>

  <div data-role="main" class="ui-content">
    
  </div>

  
</div>
</body>
</html>