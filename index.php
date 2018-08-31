<?php 

	require_once("config.php");

	// $sql = new Sql();

	// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

	// echo json_encode($usuarios);


	$usuario_ativo = new Usuario();

	$usuario_ativo->loadById(5);
	echo $usuario_ativo;
	
 ?>