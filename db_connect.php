<?php

/**
 * establishes a connection to the database
 * @return PDO A PDO instance
 */
function connect(): ?PDO
{
	require_once 'db_credentials.php';

	$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
	$attributes = array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	);

	try {
		$connection = new PDO($dsn, DB_USER, DB_PASSWORD, $attributes);
	} catch (PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
	return $connection;
}