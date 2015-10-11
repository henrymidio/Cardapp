<?php

//Conecta ao banco de dados
function DBConnect($DB_NAME){
	$link = @mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, $DB_NAME) or die(mysqli_connect_error());
	@mysqli_set_charset($link, DB_CHARSET) or die (mysqli_error($link));

	return $link;
}

//Fecha conexão com banco de dados
function DBClose($link){
	@mysqli_close($link) or die(mysqli_error($link));
}

?>