<?php
	include "general.php";
	session_start();

	$config = array(
		'DB_USER' => 'root',
		'DB_PASSWORD' => '',
		'DB_HOST' => 'localhost',
		'DB_NAME' => 'flash_framework',
	);

	$path = dirname(__FILE__) . '/';
	$path = str_replace('\\', "/", $path);
	
	global $config;

	function path() {
		echo $path;
	}
