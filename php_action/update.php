<?php 
// Sessão
session_start();

// Conexao com banco
require_once 'db_connect.php';

//Verificar se existe btn-cadastrar na global POST, se sim alguem clicou em editar
if(isset($_POST['btn-editar'])): 
 	// Antes de passa da super global para variavel nome deve filtrar (com mysql_escape_string)
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$idade = mysqli_escape_string($connect, $_POST['idade']);

	$id = mysqli_escape_string($connect, $_POST['id']);


	// Inserindo os dados no banco de dados
	$sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";

	// Verificar se conseguiu fazer a query
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!"; 
		header('Location: ../index.php?');
	else:
		$_SESSION['mensagem'] = "Erro ao Atualizar";
		header('Location: ../index.php?');
	endif;
endif;

?>