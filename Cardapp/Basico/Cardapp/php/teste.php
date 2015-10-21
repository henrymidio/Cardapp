<?php

require 'config.php';
require 'connection.php';
require 'database.php';

//$db_name = $_GET['db_name'];

$sql = "SELECT nome FROM categoria";
$query = DBExecute($sql);

while($exibe = mysqli_fetch_assoc($query)){
  echo $exibe['nome'].'<br/>';
}


?>