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

//Protege contra SQL Injection
function DBEscape($link, $dados){
	$escaped = mysqli_real_escape_string($link, $dados);
	return $escaped;
}

?>