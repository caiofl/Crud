<?php 
// Sessão
session_start();

// Conexao com banco
require_once 'db_connect.php';

//Verificar se existe btn-cadastrar na global POST, se sim alguem clicou em editar
if(isset($_POST['btn-deletar'])): 
 
	$id = mysqli_escape_string($connect, $_POST['id']);


	// Inserindo os dados no banco de dados
	$sql = "DELETE FROM clientes WHERE id = '$id'";

	// Verificar se conseguiu fazer a query
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Deletado com sucesso!"; 
		header('Location: ../index.php?');
	else:
		$_SESSION['mensagem'] = "Erro ao deletar";
		header('Location: ../index.php?');
	endif;
endif;

?>