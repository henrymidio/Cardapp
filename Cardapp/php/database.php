<?php

//Executa query
function DBExecute($link, $query) {

	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	return $result;

}

//Seleciona dados 
function DBSelect($fields = '*', $table, $args = null, $link){
	$query = "SELECT $fields FROM $table $args";

	return DBExecute($link, $query);
}

?>