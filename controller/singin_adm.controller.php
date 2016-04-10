<?php
	include "../class/Administrador.class.php";
	include "../include/conexao.php";

	$adm = new Administrador($_POST["email"], sha1($_POST["senha"]));
	if ($adm->singin($mysqli)) {	
	// create section and cookies and make a response about it
		session_start();
		$_SESSION["nome"] = $adm->getNome();
		$_SESSION["sobrenome"] = $adm->getSobrenome();
		$_SESSION["email"] = $adm->getEmail();
		$_SESSION["img"] = $adm->getImg();
		$_SESSION["idAdministrador"] = $adm->getIdAdministrador();
		$_SESSION["idOrgao"] = $adm->getIdOrgao();
	}else{
	// do not create section and make a response about it
	}
	print_r($_SESSION);
?>