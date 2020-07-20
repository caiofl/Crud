<?php
// Conexão com banco de dados
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$db_name = "crud";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_Set_charset($connect, "utf-8");

if(mysqli_connect_error()):
	echo "Error na conexão: ".mysqli_connect_error();
endif;

?>