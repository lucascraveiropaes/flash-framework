<?php
	include "general.php";

	$config = array(
		'DB_USER' => 'root',
		'DB_SENHA' => '',
		'DB_HOST' => 'localhost',
		'DB_NOME' => 'flash-framework',
	);

	function path() {
		$path = dirname(__FILE__) . '/';
		$path = str_replace('\\', "/", $path);
		echo $path;
	}

	global $config;