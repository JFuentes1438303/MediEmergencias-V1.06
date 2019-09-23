<?php  

	session_start();
	if ($_SESSION["usuario"] != "1") {
		header("Location: ../../index.php");
	}

?>