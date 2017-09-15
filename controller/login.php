<?php
	include '../model/DAO.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if(isset($_POST["login"]) && isset($_POST["password"])) {
			$login = htmlspecialchars($_POST["login"]);
			$password = htmlspecialchars($_POST["password"]);

	    	$login = login($login, $password);
	    	$_SESSION["login"] = $login;

			if($login["user"]) {
				header("Location: ../view/admin/index.php");
			}
			else {
				header("Location: ../view/admin/login.php");
			}
		}
	}
	else {		
		header("Location: ../view/admin/login.php");
		?>
			<script>
				window.onload = function() {
					demo.alertMessage('top','right', 'Por favor, informe corretamente seu login e sua senha');
				}
			</script>"; 
		<?php
	}