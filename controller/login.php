<?php
	include '../model/DAO.php';

	if(isset($_POST["login"]) && isset($_POST["password"])) {
		$login = htmlspecialchars($_POST["login"]);
		$password = htmlspecialchars($_POST["password"]);

    	$login = login($login, $password);

		if($login) {
			header("Location: ../view/index.php");
		}
		else { ?>
			<script>alert("Não foi");</script> <?php
		}
	}

?>