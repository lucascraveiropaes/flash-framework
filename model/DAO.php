<?php
	include 'User.php';
	include 'Database.php';

    function get($table, $id=null) {
    	$DB = new Database();
    	$conn = $DB->conn();
    	$result = array(
    		'result' => null,
    		'message' => null,
    	);

    	if($id) {

	    	$query = "SELECT FROM " . $table . " WHERE id = " . $id;

	    	$search = $conn->query($query);

	    	if(mysqli_num_rows($search) > 0) {
	    		$result["result"] = $search->fetch_assoc();
	    	}
	    } else {
	    	 $sql = "SELECT * FROM " . $table;

	    	 $search = $database->query($sql);

	    	 if ($search->num_rows > 0) {
	    	 	$result["result"] = $search->fetch_all(MYSQLI_ASSOC);
	    	 }
	    }

    	$DB->closeDB($conn);
    	return $result;
    }

    function login($login = null, $password = null) {
    	$DB = new Database();
    	$conn = $DB->conn();
    	$result = array(
    		'user' => null,
    		'message' => null,
    	);

    	if($password && $login) {
	    	$query = "SELECT * FROM users WHERE password = '" . $password . "' AND (login = '" . $login . "' OR email = '" . $login . "')";

	    	$search = $conn->query($query);

	    	if(mysqli_num_rows($search) == 1){
    			$result["user"] = fillUser($search);
	    	}
	    	else
	    		$result["message"] = "Login ou senha incorretos. Por favor, tente novamente.";
	    } else {
    		$result["message"] = "Por favor, preencha os campos corretamente.";
	    }

    	$DB->closeDB($conn);
    	return $result;
    }



    function fillUser($result) {

    	$user = new User();

    	while ( $row = $result->fetch_assoc() ) {
	    	$user->setId($row["id"]);
			$user->setFirst_name($row["first_name"]);
			$user->setLast_name($row["last_name"]);
			$user->setEmail($row["email"]);
			$user->setPassword($row["password"]);
			$user->setLogin($row["login"]);
			$user->setUser_type($row["user_type"]);
			$user->setLast_access($row["last_access"]);
			$user->setCreation_date($row["creation_date"]);
		}

		return $user;
    }


?>