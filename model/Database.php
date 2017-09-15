<?php
	mysqli_report(MYSQLI_REPORT_STRICT);

	class Database
	{
	    private $host = "localhost";
	    private $user = "root";
	    private $password = "";
	    private $name = "flash_framework";
	    private $connection = null;

	    public function __construct()
	    {          
	        $this->openDB();
	    }

	    public function conn()
	    {
	        return $this->connection;
	    }

	    private function openDB() {
			try {
				$this->connection = new mysqli($this->host, $this->user, $this->password, $this->name);
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
		public function closeDB($conn) {
			try {
				mysqli_close($conn);
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
	}


?>