<?php 

	require_once("config.php");

	// $sql = new Sql();

	// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

	// echo json_encode($usuarios);


	// $usuario_ativo = new Usuario();
	// $usuarios = Usuario::getList();
	// $busca = Usuario::search("ze");
	// $usuario_logado = new Usuario();


	// $usuario_ativo->loadById(5);
	// echo $usuario_ativo."<br>";
	// echo json_encode($usuarios)."<br>";
	// echo json_encode($busca)."<br>";
	
	// $usuario_logado->login("glauber", "!@#$");
	// echo $usuario_logado."<br>";

	// $usuario = new Usuario("lady", "250688");
	// $usuario->insert();
	// echo $usuario;


	$usuario = new Usuario();
	$usuario->login("glauber", "!@#$");
	echo $usuario."<br>";
	$usuario->update("Glauber Nobrega", "03101987");
	echo $usuario."<br>";


 ?>