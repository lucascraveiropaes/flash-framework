<?php
	create_htaccess();

	if(isset($_GET["page"])) {
		$page = htmlspecialchars($_GET["page"]);

		if($page == "view") {
			header("Location: view/index.php");
		}
	}







	/* Install Structure */

	function create_htaccess(){

        $file = ".htaccess";

        ob_start();

            include "htaccess.php";
            $htaccess = ob_get_contents();

        ob_end_clean();

        $absolute = __DIR__ . '\\';
        $init = $absolute;

        $htaccess = str_replace("[path]", $init, $htaccess);

        $opFile = fopen($file, 'w');

        file_put_contents($file, $htaccess, FILE_APPEND);

        fclose($opFile);

    }
?>