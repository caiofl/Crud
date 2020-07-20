<?php 
// Sessão
session_start();

// Conexao com banco
require_once 'db_connect.php';

//Verificar se existe btn-cadastrar na global POST, se sim alguem clicou em cadastrar
if(isset($_POST['btn-cadastrar'])): 
 	// Antes de passa da super global para variavel nome deve filtrar (com mysql_escape_string)
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$idade = mysqli_escape_string($connect, $_POST['idade']);


	// Inserindo os dados no banco de dados
	$sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

	// Verificar se conseguiu fazer a query
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "cadastrado com sucesso!"; 
		header('Location: ../index.php?');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php?');
	endif;
endif;

?>