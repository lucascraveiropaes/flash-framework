<?php
	if(!isset($_SESSION["login"])) {
		header("Location: ". path() . "login.php");
	}

?>