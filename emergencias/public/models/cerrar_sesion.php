<?php  
	session_start();
	$_SESSION["primer_nombre"] = "";
	$_SESSION["primer_apellido"] = "";
	$_SESSION["usuario"] = "0";
	header("Location: ../../index.php");
?>