<?php

	class User
	{
	    private $id;
	    private $first_name;
	    private $last_name;
	    private $email;
	    private $login;
	    private $password;
	    private $user_type;
	    private $last_access;
	    private $creation_date;

	    public function getFullName() {
	    	return $this->getFirst_name() . " " . $this->getLast_name();
	    }

        // User ID Functions
	    public function getId() {
	    	return $this->id;
	    }
	    public function setId($id) {
            $this->id = $id;
        }

        // User First Name Functions
	    public function getFirst_name() {
	    	return $this->first_name;
	    }
	    public function setFirst_name($first_name) {
            $this->first_name = $first_name;
        }

        // User Last Name Functions
		public function getLast_name() {
	    	return $this->last_name;
	    }
	    public function setLast_name($last_name) {
            $this->last_name = $last_name;
        }

        // User Email Functions
		public function getEmail() {
	    	return $this->email;
	    }
	    public function setEmail($email) {
            $this->email = $email;
        }

        // User Password Functions
		public function getPassword() {
	    	return $this->password;
	    }
	    public function setPassword($password) {
            $this->password = $password;
        }

        // User Login Functions
		public function getLogin() {
	    	return $this->login;
	    }
	    public function setLogin($login) {
            $this->login = $login;
        }

        // User Type Functions
		public function getUser_type() {
	    	return $this->user_type;
	    }
	    public function setUser_type($user_type) {
            $this->user_type = $user_type;
        }

        // User Lasted Access Functions
		public function getLast_access() {
	    	return $this->last_access;
	    }
	    public function setLast_access($last_access) {
            $this->last_access = $last_access;
        }

        // User Creation Date Functions
		public function getCreation_date() {
	    	return $this->creation_date;
	    }
	    public function setCreation_date($creation_date) {
            $this->creation_date = $creation_date;
        } 

	}


?>