<?php
	include 'User.php';
	include 'Database.php';

    function get($table, $id=null) {
    	$DB = new Database();

    	if($id) {

	    	$query = "SELECT FROM " . $table . " WHERE id = " . $id;

	    	$search = $DB->query($query);

	    	if ($search->num_rows > 0) {
	    		$result = $search->fetch_assoc();
	    	}
	    } else {
	    	 $sql = "SELECT * FROM " . $table;

	    	 $search = $database->query($sql);

	    	 if ($search->num_rows > 0) {
	    	 	$result = $search->fetch_all(MYSQLI_ASSOC);
	    	 }
	    }

    	$DB->closeDB();
    	return $result;
    }

    function login($login, $password) {
    	$DB = new Database();
    	$result = false;

    	if($password && $login) {

	    	$query = "SELECT FROM users WHERE password = " . $password . " AND login = " . $login . " OR email = " . $login;

	    	$search = $DB->query($query);

	    	if ($search->num_rows > 0) {
	    		$result = $search->fetch_assoc();
	    	} else {
	    		$message = "Login ou senha incorretos. Por favor, tente novamente.";
	    	}
	    } else {
    		$message = "Por favor, preencha os campos corretamente.";
	    }

    	$DB->closeDB();
    	return $result;
    }


?>