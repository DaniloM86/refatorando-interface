<?php 
	session_start();
	if (!isset($_SESSION['id_usuarios'])) {
		header('location: login.php');
		exit();
	}

 ?>

 <h2>Seja bem vindo</h2>
 <h4><a href="encerra-sessão.php">Sair</a></h4>