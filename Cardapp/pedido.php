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
  <!-- Spinbox plugin -->
  <script type="text/javascript" src="http://dev.jtsage.com/cdn/spinbox/latest/jqm-spinbox.min.js"></script>
  
</head>

<body>
	<div data-role="page" data-theme="a">

  		<div data-role="header" data-theme="b" data-position="fixed">
  			<a href="teste.php"  data-rel="back" data-transition="flow" class="az-nodisc ui-nodisc-icon ui-btn ui-icon-arrow-l ui-btn-icon-notext">Menu</a>
    		<h1>PEDIDO</h1>
  		</div>

  		<div data-role="main" >
  	
    		<ul data-role="listview" data-split-icon="edit" style="margin-top: 0px;">
				<li><a href="#"> 
						<img src="http://3.bp.blogspot.com/-KCTCIdR7djA/Tyzrk7-WPZI/AAAAAAAAAWM/64LkjNJz29k/s400/Map_pin1.png" />
						<h3>Passos, MG</h3>
						<p>Rua Pirapora, 220</p>
						<p><b>(35)6768-6786</b></p>
					</a>
					<a href="#"></a>
				</li>
    		</ul>

    		<div class="centro">
    			<h1>Total: R$00, 00</h1>
    			<a class="cancelar" href="index.html" data-theme="b" data-inline="true" data-role="button">Cancelar Pedido</a>
				<a class="enviar" href="index.html" data-theme="b" data-inline="true" data-icon="check" data-role="button">Enviar Pedido</a>
				<p>Taxa de entrega inclusa*</p>
    		</div>

    		<div>
				<ul data-role="listview">
					<li>
						<img src="https://s.yimg.com/wv/images/6d2f78a20ed5331d8898d01f8a1dac33_96.png" />
						<h5>Sanduiche<h5>
						<p class="ui-li-aside"><strong>R$ 00, 00</strong></p>
					</li>
					<li>
						<img src="http://bk-latam-prod.s3.amazonaws.com/sites/burgerking.com.br/files/BatataFrita_thumb.png" />
						<h5>Batata Frita<h5>
						<p class="ui-li-aside"><strong>R$ 00, 00</strong></p>
					</li>
					<li>
						<h4>Taxa de entrega</h4>
						<p class="ui-li-aside"><strong>R$ 00, 00</strong></p>
					</li>
    			</ul>
    		</div>
    		
  		</div>
	</div>
</body>
</html>