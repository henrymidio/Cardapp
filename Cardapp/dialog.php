<!DOCTYPE html>
<html lang="pt-BR">
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
  <!-- Spinbox plugin -->
  <script type="text/javascript" src="http://dev.jtsage.com/cdn/spinbox/latest/jqm-spinbox.min.js"></script>
  <!-- Optional Mousewheel support: http://brandonaaron.net/code/mousewheel/docs -->
  <script type="text/javascript" src="PATH/TO/YOUR/COPY/OF/jquery.mousewheel.min.js"></script>

  <style>
#cont {
  align-items: center;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
}
</style>

</head>

<body>
	
<div data-role="page" data-dialog="true" id="foo">
    <div data-role="header" data-close-btn="right">
         <h1>Quantidade</h1>
    </div>
    <div id="cont">
		
   
    <input type="text" data-role="spinbox" name="spin" id="spin" value="60" min="0" max="100" />

    </div>

</div>
</body>
</html>