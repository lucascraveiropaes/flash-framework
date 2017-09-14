<?php
	include "general.php";

	$config = array(
		'DB_USER' => 'root',
		'DB_PASSWORD' => '',
		'DB_HOST' => 'localhost',
		'DB_NAME' => 'flash_framework',
	);
	global $config;

	function path() {
		$path = dirname(__FILE__) . '/';
		$path = str_replace('\\', "/", $path);
		echo $path;
	}
